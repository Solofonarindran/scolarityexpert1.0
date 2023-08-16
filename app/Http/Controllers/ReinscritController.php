<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Repository\InscritRepository;
use App\Repository\ClasseRepository;
use App\Repository\MouvementRepository;


class ReinscritController extends Controller
{
    protected $classeRepo;
    protected $inscritRepo;
   public function __construct(ClasseRepository $classeRepo,InscritRepository $inscritRepo)
   {
        $this->classeRepo=$classeRepo;
        $this->inscritRepo=$inscritRepo;
   }
    public function store(Request $request,MouvementRepository $mouvRepo)
    {
        $request->validate(
            ['eleve_id'=>'required',
            'classe_id'=>'required',
            'somme'=>'required']
        );

        //anneescolaire_id stocké dans la session
        $data=$request->input();
        $data['anneescolaire_id']=1;
        
        $inscrit= $this->inscritRepo->edit(null,$data);
        $dataInscrit=$inscrit->getOriginal();
         //update réinscription success
        $test=$this->inscritRepo->edit($data['inscrit_id'],['is_reinscrit'=>TRUE]);
     
    
        $this->classeRepo->incrementEffActu($data['classe_id']);

        
        //enregistrer le mouvement ecolage 1mois + droit
        $dataMouv['inscrit_id']=$dataInscrit['id'];
        $dataMouv['libelle']='Droit + Ecolage 1 mois';
        $dataMouv['anneescolaire_id']=1;
        $dataMouv['montant']=$data['somme'];
        $mouvRepo->edit(null,$dataMouv);

        
        return to_route('classe.show');
    }

    public function getClasseSuiv(Request $request)
    {
        $request->validate(
            ['id'=>'required',
             'status'=>'required']
        );

        $data=$request->input();

        if($data['status']=="Non admis")
        {
            $classe=$this->classeRepo->getById($data['id']);

        }else{
            $classe=$this->classeRepo->getByForeignIdClass($data['id']);
        }
       
        return response()->json($classe);
    }


    //fonction qui retourne les inscrits pour l'années sco dernière
    public function search()
    {

       
        //années sco dans la session()
        $anneeSco_id=1;
        $inscrits=$this->inscritRepo->researchInscrit($anneeSco_id);

        return view('reinscription.searchInscrit',compact('inscrits'));
    }

}
