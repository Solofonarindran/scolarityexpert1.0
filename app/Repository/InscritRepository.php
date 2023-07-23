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

        // recherche par eleve id et la dernière année scolaire (max id)
        // Gérance Réinscription méthode 1

        public function researchInscrit($id)
        {
            return $this->model::where('eleve_id',$id)
                        ->max('anneeScolaire_id')
                        ->with($this->relation)
                        ->get();
        }
    }