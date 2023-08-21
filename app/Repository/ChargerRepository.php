<?php


    namespace App\Repository;

    use App\Models\Charger;
    use App\Models\Examen;

    class ChargerRepository extends AbstractRepository 
    {
        public function __construct(Charger $charger)
        {
            $this->model=$charger;
            $this->relation=['matiere','classe','professeur','examiners'];
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

        //retourner les chargés par idclasse
        public function getByIdInscrit($id)
        {
            return $this->model->newQuery()
                               ->whereHas('examiners',function($query) use($id) {
                                  $query->where('inscrit_id',$id);
                                       
                                 })
                                ->with(['examiners'=>function($query) use($id){
                                    $query->where('inscrit_id',$id);
                                },'matiere'])
                                ->get();
                           
           
        }

    }

?>