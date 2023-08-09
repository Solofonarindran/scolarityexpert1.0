<?php

namespace App\Http\Controllers;

use App\Repository\EleveRepository;
use App\Http\Requests\StoreEleveRequest;
use App\Http\Requests\UpdateEleveRequest;


class EleveController extends Controller
{
    
    protected $repo;

    public function __construct(EleveRepository $eleve)
    {
        $this->repo=$eleve;
    }

    public function createEleveInscription(StoreEleveRequest $request)
    {
        $request->validated();
        $this->repo->edit(null,$request->input());
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
