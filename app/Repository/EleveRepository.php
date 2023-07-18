<?php


    namespace App\Repository;

    use App\Models\Eleve;

    
    
    class EleveRepository extends AbstractRepository
    {
        public function __construct(Eleve $eleve)
        {
            $this->model=$eleve;
            $this->relation=['geniteur','inscrits','examiners'];
        }
    }