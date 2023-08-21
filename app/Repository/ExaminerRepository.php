<?php
    namespace App\Repository;

    use Illuminate\Database\Eloquent\Builder;
    use App\Models\Examiner;

    class ExaminerRepository extends AbstractRepository
    {
        public function __construct(Examiner $examiner)
        {
            $this->model=$examiner;
            $this->relation=['examen','charger','inscrit.eleve'];
        }

        // return liste des notes à modifier
        //Evaluation

        public function listeNoteByExam($charger_id,$examen_id)
        {
            
            return $this->model->where('charger_id',$charger_id)
                               ->where('examen_id',$examen_id)
                               ->with($this->relation)
                               ->get();
        }

        //supprimer note examen
        //Evaluation
        public function examAnnuler()
        {
            return $this->model->where('charger_id',$charger_id)
                               ->where('examen_id',$examen_id)
                               ->delete();
        }

        //Résultat (note) by id élève
        //Evaluation particulier
        /*public function resultatByIdInscrit($inscrit_id)
        {
           
            return $this->model->where('inscrit_id',$inscrit_id)
                               ->groupBy('charger_id')
                               ->with($this->relation)
                               ->get();
                             
                               
        }*/

        //Résultat by id exam
        //Evaluation -Général- par examen
        //ceci utilise l'attribut averageNote 
        public function resultatByExamenId()
        {
            $anneeSco_id=1; //stocker dans la session 
            return $this->model->where('examen_id',$idexam)
                               ->whereHas('charger',fn(Builder $query)=>$query->where('anneeScolaire_id',$anneeSco_id))
                               ->groupBy('eleve_id')
                               ->with($this->relation)
                               ->get();
        }

        public function resultatGeneral()
        {
            $anneeSco_id=1; //stocker dans la session 

            return $this->model->whereHas('charger',fn(Builder $query)=>$query->where('anneeScolaire_id',$anneeSco_id))
                               ->groupBy('eleve_id')
                               ->with($this->relation)
                               ->get();

        }                       
        
    }