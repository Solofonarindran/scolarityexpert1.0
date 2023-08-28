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
    }