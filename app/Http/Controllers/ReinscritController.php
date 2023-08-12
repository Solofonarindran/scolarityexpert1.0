<?php

namespace App\Http\Controllers;



class ReinscritController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('infoReinscription');
    }

    public function search()
    {
        return view('rechercheEleve');
    }

}
