<?php

    namespace App\Repository;

    class AbstractRepository
    {
        protected $model;
        protected $relation=[];

        public function getById($id)
        {
            return $this->model::find($id)->with($this->relation);

        }

        public function edit($id=null,$array=[])
        {
            return $this->model
                        ->newQuery()
                        ->updateOrCreate(['id'=>$id],$array);
        }

        public function getAll()
        {
            return $this->model
                        ->newQuery()
                        ->with($this->relation)
                        ->get();
                        
        }

        public function delete($id)
        {
            return $this->model::find($id)
                        ->delete();
        }


    }