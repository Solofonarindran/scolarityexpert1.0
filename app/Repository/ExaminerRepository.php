<?php

    namespace App\Repository;
    use App\Models\Examiner;

    class ExaminerRepository extends AbstractRepository
    {
        public function __construct(Examiner $examiner)
        {
            $this->model=$examiner;
            $this->relation=['examen','charger','eleve'];
        }
    }