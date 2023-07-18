<?php

    namespace App\Repository;
    use App\Models\Mouvement;

    class MouvementRepository extends AbstractRepository
    {
        public function __construct(Mouvement $mouvement)
        {
            $this->model=$mouvement;
            $this->relation=['inscrit'];
        }
    }