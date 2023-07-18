<?php
    namespace App\Repository;

    use App\Models\Annee_scolaire;

    class AnneeScolaireRepository extends AbstractRepository
    {
        public function __construct(Annee_scolaire $anneeSco)
        {
            $this->model=$anneeSco;
            $this->relation=['inscrits','chargers','operations'];
        }
    }


?>