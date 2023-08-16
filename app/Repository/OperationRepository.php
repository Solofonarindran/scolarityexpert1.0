<?php

    class OperationRepository extends AbstractRepository
    {
        public function __construct(Operation $operation)
        {
            $this->model=$operation;
            $this->relation=['anneescolaire','professeur'];
        }
    }
?>