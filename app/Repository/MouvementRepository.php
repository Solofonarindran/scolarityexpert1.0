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

        public function getByIdInscrit($id)
        {
            return $this->model->where('inscrit_id',$id)
                               ->get();
        }

        //somme total payé des mouvements
        public function sumMontant($annee_id)
        {
            return $this->model ->whereHas('inscrit',function($query) use($annee_id)
                                {
                                    $query->where('anneescolaire_id',$annee_id);
                                })
                                ->get()
                                ->sum('montant');
        }
        
    }