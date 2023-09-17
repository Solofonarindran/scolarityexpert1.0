<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\ClasseRepository;
use App\Repository\ChargerRepository;
use App\Repository\InscritRepository;
use App\Repository\ExaminerRepository;
use App\Repository\ExamRepository;
use App\Http\Requests\StoreExamenRequest;
use App\Http\Requests\UpdateExamenRequest;
use Carbon\Carbon;


class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $inscritRepo;
    protected $examinerRepo;

    public function __construct(InscritRepository $inscritRepo,ExaminerRepository $examinerRepo)
    {
       $this->inscritRepo=$inscritRepo;
       $this->examinerRepo=$examinerRepo;
    }

    public function index()
    {
        return view('evaluation.optionEtape1');
    }

    public function choixClasseExam($opt,ClasseRepository $classeRepo)
    {
        session(['option'=>$opt]);
        $classes =$classeRepo->getAll();
        return view('evaluation.choixClasseExam2',compact('classes'));

    }

    public function postClasseExam(Request $request,ChargerRepository $chargeRepo)
    {
       $request->validate(
            ['classe_id'=>'required',
            'examen_id'=>'required']
        );   
        $data=$request->input();
        session(['examen_id'=>$data['examen_id']]);
        session(['classe_id'=>$data['classe_id']]);

        $option=session('option');

        if($option==1)
        {
            $chargers=$chargeRepo->MatiereDispoNewNote($data['classe_id'],$data['examen_id']);

        }else{
            $chargers=$chargeRepo->MatiereDispoReclam($data['classe_id'],$data['examen_id']);    
        }

        return view('evaluation.matiereDispoEtape3',compact('chargers'));
    }

    public function postMatiereDispo(Request $request,ExamRepository $examRepo,ChargerRepository $chargeRepo)
    {
        $request->validate(
            ['charger_id'=>'required']
        );

        session(['charger_id'=>$request->input('charger_id')]);
        $option=session('option');

        $examen_id=session('examen_id');
        $classe_id=session('classe_id');
        

        $annee_id=session('annee_id');

        if($option==1)
        {
            $charger=$chargeRepo->getById($request->input('charger_id'));
            $examen=$examRepo->find($examen_id);
            $inscrits=$this->inscritRepo->inscritByClassIdAnneSco($classe_id,$annee_id);
            return view('evaluation.nouvel.liste_a_RemplirEtape3',compact('inscrits','examen','charger'));
        }else
        {
            $examiners=$this->examinerRepo->listeNoteByExam($request->input('charger_id'),$examen_id);
            return view('evaluation.reclamation.ListeReclam',compact('examiners'));
        }
       
        

    }


    //modification des notes 
    public function edit(Request $request)
    {
        $request->validate(
            [
                'inscrit_id'=>'required',
                'note'=>'required'
            ]
            );
        $data=$request->input();

        $id=empty($data['id'])? null : $data['id'];
        $this->examinerRepo->edit($id,$data);

        $charger_id=session('charger_id');
        $examen_id=session('examen_id');

        $examiners=$this->examinerRepo->listeNoteByExam($charger_id,$examen_id);
        return view('evaluation.reclamation.ListeReclam',compact('examiners'));
        
    }

    //ajout des notes par ajax
    public function add(Request $request)
    {
        $request->validate(
            ['date_examen'=>'required',
            'note'=>'required',
            'inscrit_id'=>'required']
        );
        $data=$request->input();

        //convert date format
        $data['date_examen']=date('Y-m-d', strtotime($data['date_examen']));
     

        $data['charger_id']=session('charger_id');
        $data['examen_id']=session('examen_id');
        
        $this->examinerRepo->edit(null,$data);

       return response()->json($data['inscrit_id']);
        
    }
}
