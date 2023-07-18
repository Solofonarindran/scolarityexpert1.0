<?php

    namespace App\Repository;
    use App\Models\Matiere;

    class MatiereRepository extends AbstractRepository
    {
        public function __construct(Matiere $matiere)
        {
            $this->model=$matiere;
            $this->relation=['chargers'];
        }
    }