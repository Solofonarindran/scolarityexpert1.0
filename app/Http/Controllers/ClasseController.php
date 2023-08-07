<?php

namespace App\Http\Controllers;

use App\Repository\ClasseRepository;
use App\Models\Classe;
use App\Http\Requests\StoreClasseRequest;
use App\Http\Requests\UpdateClasseRequest;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $repo;

    public function __construct(ClasseRepository $classeRepo)
    {
        $this->repo=$classeRepo;
    }

    public function index()
    {
        
    }

   
    public function edit(StoreClasseRequest $request,$id=null)
    {
        $request->validated();
        
        $this->repo->edit($id,$request->input());
        return to_route('classe.show');
    }

 
    public function showDashboard(Classe $classe)
    {
        //
        $primarys=$this->repo->getPrimaryClass();
       // $secondarys=$this->repo->getSecondaryClass();

        //dd($primarys);
        return view('gerance_classe');
    }


    public function destroy(Classe $classe)
    {
        //
    }
}
