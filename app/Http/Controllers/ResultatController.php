<?php

namespace App\Http\Controllers;

use App\Repository\AnneeScolaireRepository;
use App\Repository\InscritRepository;
use Illuminate\Http\Request;

class ResultatController extends Controller
{
    public function index(AnneeScolaireRepository $anneeScoRepo)
    {
        $annees=$anneeScoRepo->getAll();
        return view('evaluation.resultat.optionEtape1',compact('annees'));
    }

    // vue après le choix gle qui demande si annuel pour un examen
    public function choixGle()
    {
        return view('evaluation.resultat.general.choixEtape2');
    }

    public function researchInscrit(Request $request,InscritRepository $inscritRepo)
    {
        $request->validate(
            ['anneescolaire_id'=>'required']
        );

        $data=$request->input();

        $inscrits=$inscritRepo->getByAnneeId($data['anneescolaire_id']);
        
        return view('evaluation.resultat.particulier.rechercheInscrit',compact('inscrits'));
    }

}
