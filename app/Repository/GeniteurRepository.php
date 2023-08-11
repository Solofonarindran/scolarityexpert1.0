<?php

    namespace App\Repository;
    use App\Models\Geniteur;

    class GeniteurRepository extends AbstractRepository
    {
        public function __construct(Geniteur $geniteur)
        {
            $this->model=$geniteur;
            $this->relation=['eleves'];
        }   
        
 
    }