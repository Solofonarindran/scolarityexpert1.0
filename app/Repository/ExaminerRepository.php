<?php
    namespace App\Repository;

    use Illuminate\Database\Eloquent\Builder;
    use App\Models\Examiner;

    class ExaminerRepository extends AbstractRepository
    {
        public function __construct(Examiner $examiner)
        {
            $this->model=$examiner;
            $this->relation=['examen','charger','eleve'];
        }

        // return liste des notes à modifier
        //Evaluation

        public function listeNoteByExam()
        {
            $examen_id=1;
            $charger_id=1;
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

        //Résultat (note) by id élève  et id examen 
        //Evaluation particulier
        public function resultatByIdEleve($examen_id,$eleve_id)
        {
            $anneeSco_id=1;// stocker dans la session scolaire active
            return $this->model->where('examen_id',$examen_id)
                               ->where('eleve_id',$eleve_id)
                               ->whereHas('charger',function(Builder $query) use($anneeSco_id)
                                        {
                                            $query->where('anneeScolaire_id',$anneeSco_id);
                                            
                                        })
                               ->get();
        }

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