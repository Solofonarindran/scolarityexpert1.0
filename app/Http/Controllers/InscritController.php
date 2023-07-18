<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInscritRequest;
use App\Http\Requests\UpdateInscritRequest;
use App\Models\Inscrit;

class InscritController extends Controller
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
     * @param  \App\Http\Requests\StoreInscritRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInscritRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inscrit  $inscrit
     * @return \Illuminate\Http\Response
     */
    public function show(Inscrit $inscrit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inscrit  $inscrit
     * @return \Illuminate\Http\Response
     */
    public function edit(Inscrit $inscrit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInscritRequest  $request
     * @param  \App\Models\Inscrit  $inscrit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInscritRequest $request, Inscrit $inscrit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inscrit  $inscrit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inscrit $inscrit)
    {
        //
    }
}
