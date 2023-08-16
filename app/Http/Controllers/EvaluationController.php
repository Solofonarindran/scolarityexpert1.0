<?php

namespace App\Http\Controllers;

use App\Repository\ClasseRepository;
use App\Http\Requests\StoreExamenRequest;
use App\Http\Requests\UpdateExamenRequest;


class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('evaluation.optionEtape1');
    }

    public function choixClasseExam($opt,ClasseRepository $classeRepo)
    {
        session(['option'=>$opt]);
        $classes =$classeRepo->getAll();
        return view('evaluation.choixClasseExam2',compact('classes'));

    }

    public function postClasseExam(Request $request)
    {
        $request->validate(
            ['classe_id'=>'required',
            'examen_id'=>'required']
        );
    }
}
