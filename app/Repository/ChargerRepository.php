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

        public function MatiereDispoNewNote($idClasse,$examen_id)
        {
          
            return $this->model::where('classe_id',$idClasse)
                               ->where('dispo',TRUE)
                               ->whereDoesntHave('examiners',function($query) use($examen_id)
                               {
                                    $query->where('examen_id',$examen_id);
                               })
                               ->with($this->relation)
                               ->get();

        }

        //Evaluation 
        //4 ème méthode 
        public function MatiereDispoReclam($idClasse,$examen_id)
        {
           
            return $this->model::where('classe_id',$idClasse)
                                ->where('dispo',TRUE)
                                ->whereHas('examiners',function($query) use($examen_id)
                                {
                                    $query->where('examen_id',$examen_id);
                                })
                                ->with($this->relation)
                                ->get();

        }
    }

?>