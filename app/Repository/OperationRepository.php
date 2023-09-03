<?php
    namespace App\Repository;
    use App\Models\Operation;
    
    class OperationRepository extends AbstractRepository
    {
        public function __construct(Operation $operation)
        {
            $this->model=$operation;
            $this->relation=['anneescolaire','professeur'];
        }


        public function sumCharge($annee_id)
        {
            return $this->model->where('anneescolaire_id',$annee_id)
                        ->get()
                        ->sum('montant');
        }
       
    }
?>