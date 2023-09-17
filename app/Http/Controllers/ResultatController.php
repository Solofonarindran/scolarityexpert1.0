<?php

namespace App\Http\Controllers;

use App\Repository\AnneeScolaireRepository;
use App\Repository\ClasseRepository;
use App\Repository\ChargerRepository;
use App\Repository\ExamRepository;
use App\Repository\ExaminerRepository;
use App\Repository\InscritRepository;
use Illuminate\Http\Request;

class ResultatController extends Controller
{
    protected $anneeScoRepo;
    protected $examRepo;
    protected $examinerRepo;
    protected $chargerRepo;

    public function __construct(AnneeScolaireRepository $anneeRepo,
                                ExamRepository $examRepo,
                                ExaminerRepository $examinerRepo,
                                ChargerRepository  $chargerRepo)
    {
        $this->anneeScoRepo=$anneeRepo;
        $this->examRepo=$examRepo;
        $this->examinerRepo=$examinerRepo;
        $this->chargerRepo=$chargerRepo;
    }
    public function index()
    {
        $annees=$this->anneeScoRepo->getAll();
        return view('evaluation.resultat.optionEtape1',compact('annees'));
    }

    // vue après le choix gle qui demande si annuel pour un examen
    public function choixGle()
    {
        return view('evaluation.resultat.general.choixEtape2');
    }

    //response choix d'option pour gle annuel ou par examen

    public function option($opt,ClasseRepository $classeRepo)
    {
        $annees=$this->anneeScoRepo->getAll();
        $classes=$classeRepo->getAll();

        if($opt==1)
        {
            return view('evaluation.resultat.general.annuel.choixClasse',compact('annees','classes'));

        }else{

            $examens=$this->examRepo->getAll();
            return view('evaluation.resultat.general.parexam.choixClasseExam3',compact('annees','classes','examens'));

        }
       
    }

    //post classe et examen pour obtenir les résultats global par exam
    public function postClasseExam(Request $request)
    {
        $request->validate(
            ['classe_id'=>'required',
             'examen_id'=>'required',
             'annee_id'=>'required']
        );

        $data=$request->input();
        $resultats= $this->examinerRepo->resultatByExamenId($data);
       
     
        return view('evaluation.resultat.general.resultatparExam',compact('resultats'));
    }


    //post classe pour obtenir les résultats global annuel
    public function postClasse(Request $request,ClasseRepository $classeRepo)
    {
        $request->validate(
            ['classe_id'=>'required',
             'annee_id'=>'required']
        );

        $data=$request->input();

        $anneeSco=$this->anneeScoRepo->getById($data['annee_id']);
        $classe=$classeRepo->getById($data['classe_id']);

        $resultats=$this->examinerRepo-> averagAnnuel($data['classe_id'],$data['annee_id']);

        $sumcoeff=$this->chargerRepo->sumCoeff($data['classe_id']);
        
        return view('evaluation.resultat.general.resultatAnnuel',compact('anneeSco','classe','resultats','sumcoeff'));
    }
    


    //vue particulier
    public function researchInscrit(Request $request,InscritRepository $inscritRepo)
    {
        $request->validate(
            ['anneescolaire_id'=>'required']
        );

        $data=$request->input();

        $inscrits=$inscritRepo->getByAnneeId($data['anneescolaire_id']); 
        return view('evaluation.resultat.particulier.rechercheInscrit',compact('inscrits'));
    }


    //return bulletin by id_inscrit
    public function bulletin($id,$id_classe,$id_annee,InscritRepository $inscritRepo)
    {
        //note by id inscrit
        $chargers=$this->chargerRepo->getByIdInscrit($id);

        //info inscrit
        $inscrit=$inscritRepo->getById($id);

        //Moyenne à chaque examen
        $averages= $this->examinerRepo->averageByIdInscrit($id);
        
        //Moyenne des inscrits groupé par examen
        $tableAVGByexam=$this->examinerRepo->averageGroupByExam($id_classe,$id_annee);

        //Etablissement des rangs
        $tables=[];
        foreach($tableAVGByexam as $tableAVG){
           
            $tables[$tableAVG->examen_id][]=$tableAVG->inscrit_id;
        }

        $avg_annuel= $this->examinerRepo-> averagAnnuel($id_classe,$id_annee);
        return view('evaluation.resultat.particulier.bulletin',compact('chargers','inscrit','averages','tables','avg_annuel'));
    }

}
