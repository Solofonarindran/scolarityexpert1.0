<?php

    namespace App\Repository;
    use App\Models\Cycle;

    class CycleRepository extends AbstractRepository
    {
        public function __construct(Cycle $cycle)
        {
            $this->model=$cycle;
            $this->relation=['classes'];

        }
    }