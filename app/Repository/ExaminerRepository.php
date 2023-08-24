<?php


    namespace App\Repository;

    use Illuminate\Database\Eloquent\Builder;
    use App\Models\Examiner;
    use App\Models\Charger;

    class ExaminerRepository extends AbstractRepository
    {
        public function __construct(Examiner $examiner)
        {
            $this->model=$examiner;
            $this->relation=['examen','charger','inscrit'];
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

        
        //moyenne groupée par examen et id inscrit
        public function averageByIdInscrit($id)
        {
            return $this->model->where('inscrit_id',$id)
                                ->with(['charger'=>function($query){
                                    $query->select('id','coefficient');
                                }])
                               ->selectRaw('examen_id, SUM(note * coefficient) as weighted_sum, SUM(coefficient) as total_coeff')
                               ->join('charger','charger.id','=','examiner.charger_id')
                               ->groupBy('examen_id')
                               ->get();
        }

        //moyenne des inscrit groupée par examen
        public function averageGroupByExam($id_classe,$id_annee)
        {
            
             return $this->model->whereHas('inscrit',function($query) use($id_classe,$id_annee)
                                {
                                    $query->where('classe_id',$id_classe);
                                    $query->where('anneescolaire_id',$id_annee);
                                })
                                ->selectRaw('examen_id,inscrit_id, SUM(note * coefficient) as weighted_sum, SUM(coefficient) as total_coeff')
                                ->join('charger','charger.id','=','examiner.charger_id') 
                                ->groupBy('examen_id','inscrit_id')
                                ->orderBy('examen_id')
                                ->orderByDesc('weighted_sum')
                                ->get();
        }

         //moyenne des inscrit annuel
         public function averagAnnuel($id_classe,$id_annee)
         {
             
              return $this->model->whereHas('inscrit',function($query) use($id_classe,$id_annee)
                                 {
                                     $query->where('classe_id',$id_classe);
                                     $query->where('anneescolaire_id',$id_annee);
                                 })
                                 ->selectRaw('inscrit_id,examen_id,SUM(note * coefficient) as weighted_sum, SUM(coefficient) as total_coeff')
                                 ->join('charger','charger.id','=','examiner.charger_id') 
                                 ->groupBy('inscrit_id')
                                 ->orderByDesc('weighted_sum')
                                 ->with('inscrit')
                                 ->get();
         }


         //résultat by examen id
         public function resultatByExamenId($data)
         {
             
             return $this->model->selectRaw('inscrit_id,examen_id,SUM(note * coefficient) as weighted_sum, SUM(coefficient) as total_coeff')
                                ->join('charger','charger.id','=','examiner.charger_id') 
                                ->where('examen_id',$data['examen_id'])
                                ->whereHas('inscrit',function(Builder $query) use($data){
                                    $query->where('anneescolaire_id',$data['annee_id']);
                                    $query->where('classe_id',$data['classe_id']);
                                })
                                ->orderByDesc('weighted_sum')
                                ->groupBy('inscrit_id')
                                ->with($this->relation)
                                ->get();
         }


        //--- NOn utilisé--//

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
    
      

        public function resultatGeneral()
        {
            $anneeSco_id=1; //stocker dans la session 

            return $this->model->whereHas('charger',fn(Builder $query)=>$query->where('anneeScolaire_id',$anneeSco_id))
                               ->groupBy('eleve_id')
                               ->with($this->relation)
                               ->get();

        }                       
        
    }