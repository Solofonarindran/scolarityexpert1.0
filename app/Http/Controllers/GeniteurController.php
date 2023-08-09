<?php

namespace App\Http\Controllers;

use App\Repository\GeniteurRepository;
use App\Models\Geniteur;
use Illuminate\Http\Request;

class GeniteurController extends Controller
{
    protected $parent;

    public function __construct(GeniteurRepository $parent)
    {
        $this->parent=$parent;
    }

    public function createParentInscrit(StoreParentRequest $request)
    {
        $request->validated();
        $this->parent->edit(null,$request->input());
    }

    public function destroy(Geniteur $geniteur)
    {
        //
    }
}
