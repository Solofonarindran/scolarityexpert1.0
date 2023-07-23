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

        //return classes par id cycle
        //function 1 gérance Inscription
        public function getClassesDispo($id)
        {
            return $this->model::find($id)->classes()
                                          ->whereHas('anneeScolaire_classe',function(Builder $query){
                                            $query->where('dispo',TRUE);
                                          });
        }
    }