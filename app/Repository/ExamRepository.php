<?php


    namespace App\Repository;

    use App\Models\Examen;

    
    
    class ExamRepository extends AbstractRepository
    {
        public function __construct(Examen $examen)
        {
            $this->model=$examen;
            
        }

        public function find($id)
        {
            return $this->model::find($id);
        }
    }