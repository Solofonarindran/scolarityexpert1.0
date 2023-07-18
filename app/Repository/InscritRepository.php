<?php

    namespace App\Repository;
    use App\Models\Inscrit;

    class InscritRepository extends AbstractRepository
    {
        public function __construct(Inscrit $inscrit)
        {
            $this->model=$inscrit;
            $this->relation=['eleve','annee_scolaire','classe','movements','contrats'];
        }
    }