<?php
    namespace App\Repository;
    use App\Models\Cycle;
    use Illuminate\Contracts\Database\Eloquent\Builder;

    class CycleRepository extends AbstractRepository
    {
        public function __construct(Cycle $cycle)
        {
            $this->model=$cycle;
            $this->relation=['classes'];

        }

        public function find($id)
        {
           return $this->model::find($id);
        }
    }