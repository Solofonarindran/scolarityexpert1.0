<?php
    namespace App\Repository;
    use App\Models\Professeur;

    class ProfesseurRepository extends AbstractRepository
    {
        public function __construct(Professeur $professeur)
        {
            $this->model=$professeur;
            $this->relation=['rule','chargers','operations'];
        }
    }