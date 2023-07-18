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
            return $this->model::updateOrCreate(['id'=>$id],$array);
        }

        public function getAll()
        {
            return $this->model::all();
        }

        public function delete($id)
        {
            return $this->model::find($id)
                        ->delete();
        }


    }