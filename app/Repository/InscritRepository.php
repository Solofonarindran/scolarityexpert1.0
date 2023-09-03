<?php
    namespace App\Repository;
    use App\Models\Inscrit;
    use App\Models\Mouvement;
    use Illuminate\Support\Facades\DB;

    class InscritRepository extends AbstractRepository
    {
        public function __construct(Inscrit $inscrit)
        {
            $this->model=$inscrit;
            $this->relation=['eleve','anneescolaire','classe','mouvements','contrats'];
        }
        //get by annnescolaire_id

        public function getByAnneeId($annee_id)
        {
            return $this->model
                        ->where('anneescolaire_id',$annee_id)
                        ->with($this->relation)
                        ->get();
        }

        // recherche par eleve id et la dernière année scolaire (max id)
        // Gérance Réinscription méthode 1

        public function researchInscrit($id)
        {
            return $this->model
                        //->select('*')
                        ->where('anneescolaire_id',$id)
                        ->where('is_reinscrit',FALSE)
                        ->groupBy('eleve_id')     
                        ->orderBy('eleve_id')
                        ->with($this->relation)
                        ->get();
        }

       // T M PAYÉ
        public function TMpaye($annee_id)
        {
            return $this->model->where('anneescolaire_id',$annee_id)
                               ->where('tm_finish',TRUE)
                               ->with('classe.cycle')
                               ->get();
                               
        }

        //nombre des friandise PAYÉ
        public function FriandisePaye($annee_id)
        {
            return $this->model->where('anneescolaire_id',$annee_id)
                               ->where('friandise_finish',TRUE)
                               ->with('classe.cycle')
                               ->get();
                              
        }

        //nombre des Ecolage PAYÉ
        public function nbEcolagepaye($annee_id)
        {
            return $this->model->where('anneescolaire_id',$annee_id)
                               ->get()
                               ->sum('nb_moisPayé');
        }

        //nombre des participations payées
        public function ParticipationPaye($annee_id)
        {
            return $this->model->where('anneescolaire_id',$annee_id)
                               ->where('participation_finish',TRUE)
                               ->whereHas('eleve',function($query){
                                    $query->where('inne',TRUE);
                               })
                               ->with('classe.cycle')
                               ->get();
                               
        }

        //nombre des participations payantes(que doivent être payées)
        public function nbParticipation($annee_id)
        {
            return $this->model->where('anneescolaire_id',$annee_id)
                               ->whereHas('eleve',function($query){
                                    $query->where('inne',TRUE);
                               })
                               ->get()
                               ->count('id');
        }


        // return les inscrit doivent notés

        public function inscritByClassIdAnneSco($classe_id,$annee_id)
        {
            return $this->model
                        ->newQuery()
                        ->where('classe_id',$classe_id)
                        ->where('anneescolaire_id',$annee_id)
                        ->with(['eleve'])
                        ->get();
        }

        //return liste des inscrits non payé les frais 

        public function inscritNonPayé($annee_id)
        {
            return $this->model
                        ->newQuery()
                        ->where('anneescolaire_id',$annee_id)
                        ->where(function($query){
                            $query->where('frais_finish',FALSE);
                            $query->orWhere('participation_finish',FALSE);
                            $query->orWhere('friandise_finish',FALSE);
                        })->get();
                      
        }

                         

       public function increment_nb_moisPayé($id,$nbr)
       {
         return $this->model
                     ->where('id',$id)
                     ->increment('nb_moisPayé',$nbr);
       }
    }