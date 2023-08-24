<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOperationRequest;
use App\Http\Requests\UpdateOperationRequest;
use App\Repository\InscritRepository;
use App\Repository\AnneeScolaireRepository;
use App\Models\Operation;

class OperationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function searchInscrit(InscritRepository $inscritRepo)
    {
        $id_annee=1;
        //$id_annee=session('annee_id')

        $inscrits= $inscritRepo->inscritNonPayé($id_annee);   
        return view('financière.searchInscritByAnneeClass',compact('inscrits'));               
    }


    public function vuepayementById($id,InscritRepository $inscritRepo,
                                    AnneeScolaireRepository $anneeRepo)
    {
       //$annee=session('annee');
        $array=$anneeRepo->tableau(1);
        $inscrit=$inscritRepo->getById($id);
       return view('financière.fraisScolaire',compact('array','inscrit'));
    }

   
}
