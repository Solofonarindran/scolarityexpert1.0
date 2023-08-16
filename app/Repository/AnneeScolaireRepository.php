<?php
    namespace App\Repository;

    use App\Models\AnneeScolaire;

    class AnneeScolaireRepository extends AbstractRepository
    {
        public function __construct(AnneeScolaire $anneeSco)
        {
            $this->model=$anneeSco;
            $this->relation=['inscrits','chargers','operations'];
        }

    }
?>