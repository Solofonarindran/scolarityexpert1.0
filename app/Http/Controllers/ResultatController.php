<?php

namespace App\Http\Controllers;

use App\Repository\AnneeScolaireRepository;
use App\Repository\ClasseRepository;
use App\Repository\ExamRepository;
use App\Repository\ExaminerRepository;
use App\Repository\InscritRepository;
use Illuminate\Http\Request;

class ResultatController extends Controller
{
    protected $anneeScoRepo;
    protected $examRepo;
    protected $examinerRepo;

    public function __construct(AnneeScolaireRepository $anneeRepo,
                                ExamRepository $examRepo,
                                ExaminerRepository $examinerRepo)
    {
        $this->anneeScoRepo=$anneeRepo;
        $this->examRepo=$examRepo;
        $this->examinerRepo=$examinerRepo;
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
        dd($data);
    }


    //post classe pour obtenir les résultats global annuel
    public function postClasse(Request $request)
    {
        $request->validate(
            ['classe_id'=>'required',
             'annee_id'=>'required']
        );

        $data=$request->input();
        dd($data);
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
    public function bulletin($id)
    {
        
       $examiners= $this->examinerRepo->resultatByIdEleve($id);
       return $examiners;
    }

}
