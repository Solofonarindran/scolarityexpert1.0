<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnnee_scolaireRequest;
use App\Http\Requests\UpdateAnnee_scolaireRequest;
use App\Models\Annee_scolaire;

class AnneeScolaireController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAnnee_scolaireRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnnee_scolaireRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Annee_scolaire  $annee_scolaire
     * @return \Illuminate\Http\Response
     */
    public function show(Annee_scolaire $annee_scolaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Annee_scolaire  $annee_scolaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Annee_scolaire $annee_scolaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnnee_scolaireRequest  $request
     * @param  \App\Models\Annee_scolaire  $annee_scolaire
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnnee_scolaireRequest $request, Annee_scolaire $annee_scolaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Annee_scolaire  $annee_scolaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Annee_scolaire $annee_scolaire)
    {
        //
    }
}
