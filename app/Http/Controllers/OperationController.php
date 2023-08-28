<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Repository\InscritRepository;
use App\Repository\OperationRepository;
use App\Repository\AnneeScolaireRepository;
use App\Http\Requests\StoreOperationRequest;
use App\Http\Requests\UpdateOperationRequest;

class OperationController extends Controller
{
    protected $operationRepo;
    

    public function __construct(OperationRepository $operationRepo)
    {
        $this->operationRepo=$operationRepo;
        
    }
  

    


}
