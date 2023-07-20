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

        // retourner id de la classe qui possède la clé étrangère comme 
        // id de la classe prédecesseur

        public function retournIdSuccesseur($id)
        {
           return $this->model::where('classe_id',$id)->value('id');
        }


    }



?>