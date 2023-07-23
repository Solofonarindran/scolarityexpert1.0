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
        
 
        //Gérance Inscription 
        //3 ème méthode
        
        public function researchParents($words)
        {
           return $this->model::where('name_father','LIKE','%'.$words.'%')
                              ->orwhere('name_mother','LIKE','%'.$words.'%');  
        }
    }