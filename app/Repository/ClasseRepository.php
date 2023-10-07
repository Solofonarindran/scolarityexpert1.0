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


       public function find($id)
       {
            return $this->model::find($id);
       }

        public function getByForeignIdClass($id)
        {
            return $this->model->newQuery()
                                ->where('classe_id',$id)
                                ->with(['classe','cycle'])
                                ->get();
        }

        //retourner les classes de presco
        //Dashboard classe
        public function getPrescoClass($annee_id)
        {
            return $this->model
                        ->newQuery()
                        ->where('cycle_id',1)
                        ->with(['inscrits'=>function($query) use($annee_id){
                            $query->where('anneescolaire_id',$annee_id);

                        }])
                        ->get();
        }

        //retourner les classes de primaire
        //Dashboard classe
        public function getPrimaryClass($annee_id)
        {
            return $this->model
                        ->newQuery()
                        ->where('cycle_id',2)
                        ->with(['inscrits'=>function($query) use($annee_id){
                            $query->where('anneescolaire_id',$annee_id);
                        }])
                        ->get();
        }

        //retourner les classes de sécondaire
        //Dashboard classe
        public function getSecondaryClass($annee_id)
        {
            return $this->model
                         ->newQuery()
                         ->where('cycle_id',3)
                         ->with(['inscrits'=>function($query) use($annee_id){
                            $query->where('anneescolaire_id',$annee_id);
                         }])
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