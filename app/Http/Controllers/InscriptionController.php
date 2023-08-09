<?php

namespace App\Http\Controllers;


use App\Models\Inscrit;
use App\Repository\CycleRepository;
use Illuminate\Http\Request;
use App\Repository\ClasseRepository;


class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ChoixCycle()
    {
        return view('inscription.choixCycleEtape1');
    }

    //retourner parent formulaire
    public function parentForm(Request $request)
    {
        $request->validate(
            ['classe_id'=>'required']
        );
        $data=$request->input();
        return view('inscription.infoParentEtape3',compact('data'));

    }

    //get by id classe from  ajax
    public function findId(Request $request,ClasseRepository $classeRepo)
    {
        $data=$request->input();
        $classe=$classeRepo->getById($data['id']);
        return response()->json_encode($classe);
    }
    
    public function ClasseDispo(ClasseRepository $classeRepo,CycleRepository $cycleRepo,$id)
    {
        $cycle=$cycleRepo->getById($id);
        $classes=$classeRepo->getClassesDispo($id);
        return view('inscription.choixClasseEtape2',compact('classes','cycle'));
    }
    
    public function destroy(Inscrit $inscrit)
    {
        //
    }
}
