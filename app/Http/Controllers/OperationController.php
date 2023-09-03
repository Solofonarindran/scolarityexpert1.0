<?php

namespace App\Http\Controllers;


use App\Repository\ProfesseurRepository;
use Illuminate\Http\Request;
use App\Repository\InscritRepository;
use App\Repository\ChargerRepository;
use App\Repository\OperationRepository;
use App\Repository\AnneeScolaireRepository;
use App\Http\Requests\StoreOperationRequest;
use App\Http\Requests\UpdateOperationRequest;

class OperationController extends Controller
{
    protected $operationRepo;
    protected $profRepo;

    public function __construct(OperationRepository $operationRepo,ProfesseurRepository $profRepo)
    {
        $this->operationRepo=$operationRepo;
        $this->profRepo=$profRepo;
    }
    
    public function searchProf()
    {
        $professeurs=$this->profRepo->getAll();
        return view('financière.searchProf',compact('professeurs'));
    }

    public function vuepayementById($id,AnneescolaireRepository $anneeRepo,ChargerRepository $chargerRepo)
    {
        //$annee_id=session('annee_id')
        $annee_id=1;

        $array=$anneeRepo->tableau(1);
        $prof=$this->profRepo->_getById($id,$annee_id);
        
        //$heure charger par mois
        $heure= $prof[0]->chargers->sum('heurechargerparmois');

        //nombre des mois payés 
        $nb=$prof[0]->operations->sum('nb');

        return view('financière.salaire',compact('array','prof','heure','nb'));
    }

    public function postsalaire($id,Request $request)
    {
        //$annee_id=session('annee_id')
        $annee_id=1;

       $data=$request->input();
       $data['anneescolaire_id']=$annee_id;
       $data['professeur_id']=$id;

       $this->operationRepo->edit(null,$data);
      
       return to_route('operation.prof.sal',['id'=>$id]);
    }

    public function getByIdProf($id)
    {
        //$annee_id=session('annee_id')
        //$annee=session('annee')

        $annee_id=1;
        $annee='2023-2024';

        $prof=$this->profRepo->_getById($id,$annee_id);

        return view('financière.detailOperationProf',compact('annee','prof'));
    }


}
