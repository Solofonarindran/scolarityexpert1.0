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