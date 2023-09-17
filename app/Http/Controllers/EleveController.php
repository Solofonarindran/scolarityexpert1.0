<?php

namespace App\Http\Controllers;

use App\Repository\MouvementRepository;
use App\Repository\ClasseRepository;
use App\Repository\EleveRepository;
use App\Repository\InscritRepository;
use App\Http\Requests\StoreEleveRequest;
use App\Http\Requests\UpdateEleveRequest;


class EleveController extends Controller
{
    protected $eleveRepo;
    protected $classeRepo;

    public function __construct(EleveRepository $eleveRepo,
         ClasseRepository $classeRepo)
    {
        $this->repo=$eleveRepo;
        $this->classeRepo=$classeRepo;
       
    }
    
    //createEleveInscription fin étape
    public function createEleveInscription(StoreEleveRequest $request,
         MouvementRepository $mouvRepo,InscritRepository $InscriRepo)
    {
        $request->validated();
        $data=$request->input();

        $data['geniteur_id']=session()->pull('geniteur_id');//ajout de l'id geniteur

        if(session('inne'))
        {
            $data['inne']=session()->pull('inne');
        }

        $eleve=$this->repo->edit(null,$data);
        $data=$eleve->getOriginal();
        
        //chargement de données pour inscription
        $datarequest=[];
        $datarequest['eleve_id']=$data['id'];
        $datarequest['anneescolaire_id']=session('annee_id');
        $datarequest['classe_id']=session()->pull('classe_id');

        //ajout inscrit et retourner l'id
        $dataMouv=[];
        $inscrit=$InscriRepo->edit(null,$datarequest);
        $dataInscrit=$inscrit->getOriginal();

              
        //enregistrer le mouvement ecolage 1mois + droit
        $dataMouv['inscrit_id']=$dataInscrit['id'];
        $dataMouv['libelle']='Droit + Ecolage 1 mois';
        $dataMouv['montant']=session()->pull('total');
        $mouvRepo->edit(null,$dataMouv);

        

        return to_route('classe.show');
    }



    public function store(StoreEleveRequest $request)
    {
        //
    }

  
    public function show(Eleve $eleve)
    {
        //
    }

   
    public function edit(Eleve $eleve)
    {
        //
    }

   
    public function update(UpdateEleveRequest $request, Eleve $eleve)
    {
        //
    }

   
    public function destroy(Eleve $eleve)
    {
        //
    }
}
