<?php


    namespace App\Repository;

    use App\Models\Charger;

    class ChargerRepository extends AbstractRepository 
    {
        public function __construct(Charger $charger)
        {
            $this->model=$charger;
            $this->relation=['matiere','classe','professeur','annee_scolaire','examiners'];
        }
    }

?>