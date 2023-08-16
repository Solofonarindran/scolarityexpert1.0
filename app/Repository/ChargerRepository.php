<?php


    namespace App\Repository;

    use App\Models\Charger;

    class ChargerRepository extends AbstractRepository 
    {
        public function __construct(Charger $charger)
        {
            $this->model=$charger;
            $this->relation=['matiere','classe','professeur','anneeScolaire','examiners'];
        }

        // Evaluation 
        //4 ème méthode (nouveau)

        public function MatiereDispoNewNote()
        {
            $anneeScoActive='2023'; // stocker dans la session 
            $anneeId=1; //stocker dans la session 

            return $this->model::where('classe_id',$idClasse)
                               ->where('anneescolaire_id',$anneeId)
                               ->whereDoesntHave('examiners',function(Builder $query)
                               {
                                    $query->where('examen_id',$examen_id);
                               })
                               ->with($this->relation)
                               ->get();

        }

        //Evaluation 
        //4 ème méthode 
        public function MatiereDispoReclam()
        {
            $idClasse=2;
            $anneeId=1;
            $anneeScoActive=2023;
            return $this->model::where('classe_id',$idClasse)
                                ->where('anneescolaire_id',$anneeId)
                                ->whereHas('examiners',function(Builder $query)
                                {
                                    $query->where('examen_id',$examen_id);
                                })
                                ->with($this->relation)
                                ->get();

        }
    }

?>