<?php
    namespace App\Repository;
    use App\Models\Professeur;

    class ProfesseurRepository extends AbstractRepository
    {
        public function __construct(Professeur $professeur)
        {
            $this->model=$professeur;
            $this->relation=['rule','chargers','operations'];
        }

        public function _getById($id,$annee_id)
        {
            return $this->model
                        ->newQuery()
                        ->where('id',$id)
                        ->with(['rule','chargers'=>function($query)
                                        {
                                            $query->where('dispo',TRUE);
                                        },
                                        'operations'=>function($query) use($annee_id)
                                        {
                                            $query->where('anneescolaire_id',$annee_id);
                                        }])
                               
                        
                        ->get();
    
        }

        
    }