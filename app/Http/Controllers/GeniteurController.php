<?php

namespace App\Http\Controllers;

use App\Models\Geniteur;
use Illuminate\Http\Request;
use App\Repository\GeniteurRepository;
use App\Http\Requests\StoreGeniteurRequest;

class GeniteurController extends Controller
{
    protected $parent;

    public function __construct(GeniteurRepository $parent)
    {
        $this->parent=$parent;
    }

    public function createParentInscrit(StoreGeniteurRequest $request)
    {
        $request->validated();
        
        $parent=$this->parent->edit(null,$request->input());
        $data=$parent->getOriginal();
        session(['geniteur_id'=>$data['id']]);
        session()->put('inne',TRUE);
        session()->save();
        return view('inscription.infoEleveEtape4');
    }
}
