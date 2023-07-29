<?php
    namespace App\Repository;
    use App\Models\Inscrit;
    use App\Models\Mouvement;

    class InscritRepository extends AbstractRepository
    {
        public function __construct(Inscrit $inscrit)
        {
            $this->model=$inscrit;
            $this->relation=['eleve','annee_scolaire','classe','movements','contrats'];
        }

        // recherche par eleve id et la dernière année scolaire (max id)
        // Gérance Réinscription méthode 1

        public function researchInscrit($id)
        {
            return $this->model::where('eleve_id',$id)
                        ->max('anneeScolaire_id')
                        ->with($this->relation)
                        ->get();
        }

        //recherche inscrit par id avec le nombre de mois frais payé
        // Gestion financière - frais scolaire

        public function nbFraisPayé($id)
        {
            $this->model::find($id)->mouvements
                                   ->sum(fn(Mouvement $mvt)=>$mvt->nb)
                                   ->where('anneeScolaire_id',$anneeScoId)
                                   ->where('libelle','ecolage');
                                   
        }
    }