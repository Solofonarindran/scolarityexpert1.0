<?php

    namespace App\Repository;
    use App\Models\Contrat;

    class ContratRepository extends AbstractRepository
    {
        public function __construct(Contrat $contrat)
        {
            $this->model=$contrat;
            $this->relation=['inscrit'];
        }
    }
?>