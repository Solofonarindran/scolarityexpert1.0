<?php
namespace App\Http\Controllers;

use App\Repository\AnneeScolaireRepository;
use Illuminate\Http\Request;
use App\Repository\InscritRepository;
use App\Repository\MouvementRepository;
use App\Repository\CycleRepository;

class MouvementController extends Controller
{
    protected $inscritRepo;
    protected $mouvRepo;

    public function __construct(InscritRepository $inscritRepo,MouvementRepository $mouvRepo)
    {
        $this->inscritRepo=$inscritRepo;
        $this->mouvRepo=$mouvRepo;
    }

    public function searchInscrit()
    {
        $id_annee=1;
        //$id_annee=session('annee_id')

        $inscrits= $this->inscritRepo->inscritNonPayé($id_annee);   
        return view('financière.searchInscritByAnneeClass',compact('inscrits'));               
    }

    //interface de payement des mouvement par id 
    public function vuepayementById($id,
                                    AnneeScolaireRepository $anneeRepo)
    {
       //$annee=session('annee');
        $array=$anneeRepo->tableau(1);
        $inscrit=$this->inscritRepo->getById($id);
       return view('financière.fraisScolaire',compact('array','inscrit'));
    }


    //récupérer les mouvements par Id inscrit
    public function getByIdInscrit($id)
    {
        $inscrit=$this->inscritRepo->getById($id);
        $mouvements= $this->mouvRepo->getByIdInscrit($id);
        return view('financière.detailOperationEleve',compact('mouvements','inscrit'));
    }

    //post de frais de scolarité
    public function postfrais($id,Request $request)
    {
        $request->validate(
            ['nb'=>'required|integer']
        );
        $data=$request->input();
        $data['inscrit_id']=$id;
        $this->mouvRepo->edit(null,$data);
        $this->inscritRepo->increment_nb_moisPayé($id,$data['nb']);

        return to_route('operation.in.fr',['id'=>$id]);
    }


    //post de données pour le friandise, le TM et la participation
    public function postdivers($id,$cycle,Request $request,CycleRepository $cycleRepo)
    {
        $cycle=$cycleRepo->find($cycle);

        $net_friandise=$cycle->friandise;
        $net_tm=$cycle->tm;
        $net_participation=$cycle->participation;

        $sum=0;
        $libelle="";
        $data=[];
        $dataMouv=[];

        $friandise=$request->boolean('friandise');
        $tm=$request->boolean('tm');
        $participation=$request->boolean('participation');

        if($friandise){ 
            $sum+=$net_friandise;
            $libelle=$libelle." friandise:".$net_friandise;
            $data['friandise_finish']=TRUE;
        }

        if($tm){
            $sum+=$net_tm;
            $libelle=$libelle." TM:".$net_tm;
            $data['tm_finish']=TRUE;
        }

        if($participation){
            $sum+=$net_participation;
            $libelle=$libelle." participation:".$net_participation;
            $data['participation_finish']=TRUE;
        }

        $dataMouv['libelle']=$libelle;
        $dataMouv['montant']=$sum;
        $dataMouv['inscrit_id']=$id;

        $this->inscritRepo->edit($id,$data);
        $this->mouvRepo->edit(null,$dataMouv);

        return to_route('operation.in.fr',['id'=>$id]);
    }
}
