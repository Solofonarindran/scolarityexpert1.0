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
        $data=$this->parent->edit(null,$request->input());

        dd($data);
        return view('inscription.infoEleveEtape4');
    }

    public function destroy(Geniteur $geniteur)
    {
        //
    }
}
