<?php

    namespace App\Repository;

    use App\Models\Classe;

    class ClasseRepository extends AbstractRepository
    {
        public function __construct(Classe $classe)
        {
            $this->model=$classe;
            $this->relation=['classe','cycle','chargers','inscrits'];
        }


        public function incrementEffActu($id)
        {
           return $this->model->where('id',$id)
                              ->increment('effectifActu',1);
        }


        //retourner les classes de presco
        //Dashboard classe
        public function getPrescoClass()
        {
            return $this->model
                        ->newQuery()
                        ->where('cycle_id',1)
                        ->with($this->relation)
                        ->get();
        }

        //retourner les classes de primaire
        //Dashboard classe
        public function getPrimaryClass()
        {
            return $this->model
                        ->newQuery()
                        ->where('cycle_id',2)
                        ->with($this->relation)
                        ->get();
        }

         //retourner les classes de sécondaire
         //Dashboard classe
         public function getSecondaryClass()
         {
             return $this->model
                         ->newQuery()
                         ->where('cycle_id',3)
                         ->with($this->relation)
                         ->get();
         }
         

          //return classes par id cycle
        //function 1 gérance Inscription
        public function getClassesDispo($id)
        {
            return $this->model
                        ->newQuery()
                        ->where('cycle_id',$id)
                        ->where('dispo',TRUE)
                        ->with($this->relation)
                        ->get();                                         
        }

        //retourner classes pour prédecesseur 
        //ajax 
        public function getClassesPred($id)
        {
            return $this->model
                        ->newQuery()
                        ->where('cycle_id',$id)
                        ->get();                                         
        }


        // retourner la classe qui possède la clé étrangère comme 
        // id de la classe prédecesseur

        public function returnClasseSuccesseur($id)
        {
           return $this->model::where('classe_id',$id)
                       ->with($this->relation);
        }

        // return frais scolaire par id classe
        // function 2 Gérance inscription
        public function getFraiScolaire($id)
        {
            return $this->model::find($id)->value('frais_scolaire');
        }
        
    }



?>