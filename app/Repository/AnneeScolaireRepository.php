<?php
    namespace App\Repository;

    use App\Models\Anneescolaire;

    class AnneeScolaireRepository extends AbstractRepository
    {
        public function __construct(Anneescolaire $anneeSco)
        {
            $this->model=$anneeSco;
            $this->relation=['inscrits','operations'];
        }

    }
?>