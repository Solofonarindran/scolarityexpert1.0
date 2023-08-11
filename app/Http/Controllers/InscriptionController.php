<?php

namespace App\Http\Controllers;


use session;
use App\Repository\EleveRepository;
use App\Models\Inscrit;
use Illuminate\Http\Request;
use App\Repository\CycleRepository;
use App\Repository\ClasseRepository;
use App\Repository\GeniteurRepository;
use App\Http\Requests\StoreEleveRequest;


class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $classeRepo;
    protected $cycleRepo;
    protected $eleveRepo;
    protected $geniteurRepo;

    public function __construct(ClasseRepository $classeRepo,EleveRepository $eleveRepo,
                                CycleRepository $cycleRepo,GeniteurRepository $geniteurRepo)
    
    {
        $this->classeRepo=$classeRepo;
        $this->cycleRepo=$cycleRepo;
        $this->eleveRepo=$eleveRepo;
        $this->geniteurRepo=$geniteurRepo;
    }
    public function ChoixCycle()
    {
        return view('inscription.choixCycleEtape1');
    }


    
    //createEleveInscription fin étape
    public function createEleveInscription(StoreEleveRequest $request)
    {
        $request->validated();
        $this->eleveRepo->edit(null,$request->input());
        dd($eleveRepo);

    }

    //passer geniteur_id stocker dans la session cookies
    public function passParentId(Request $request)
    {
        $request->validate(
            ['geniteur_id'=>'required']
        );
        $data=$request->input();
        session(['geniteur_id'=>$data['geniteur_id']]);

        return view('inscription.infoEleveEtape4');
    }

    //retourner parent formulaire
    public function choixclasse(Request $request)
    {
        $request->validate(
            ['classe'=>'required']
        );

        //stocker dans la session l'id de la classe
        $data=$request->input();
        session(['classe_id'=>$data['classe']]);

        $parents=$this->geniteurRepo->getAll();
        return view('inscription.infoParentEtape3',compact('parents'));

    }

    //get by id classe from  ajax
    public function findId(Request $request)
    {
        $data=$request->input();
        $classe=$this->classeRepo->getById($data['id']);
        return response()->json_encode($classe);
    }
    
    public function ClasseDispo($id)
    {
        $cycle=$this->cycleRepo->getById($id);
        $classes=$this->classeRepo->getClassesDispo($id);
        return view('inscription.choixClasseEtape2',compact('classes','cycle'));
    }
    
    public function destroy(Inscrit $inscrit)
    {
        //
    }
}
