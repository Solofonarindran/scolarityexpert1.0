<?php
    namespace App\Repository;

    use App\Models\Anneescolaire;

    class AnneeScolaireRepository extends AbstractRepository
    {
        public function __construct(Anneescolaire $anneeSco)
        {
            $this->model=$anneeSco;
            $this->relation=['inscrits','operations'];
        }

        public function getActif()
        {
            return $this->model->where('actif',TRUE)
                               ->get();
        }


        //return array mois pour le payement de frais
        public function tableau($id_annee)
        {

            $annee=$this->model::find($id_annee);

            $indexmois=$annee->indexmois;
            $nb_moisAnnee=$annee->nb_mois;

            //tableau du mois normal
            $arrayMounth=array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
            
            // set index pour l'index du tableau
            $debutindex=$indexmois-=1;
            
            //déclaration de tableau de retour
            $arrayReturn=[];

            for($i=0;$i<$nb_moisAnnee;$i++)
            {
                $year=0;
                
                if($indexmois<=11 && $indexmois>=$debutindex)
                { 
                    $year=$annee->debut_annee; 
                }else
                  { 
                    $year=$annee->debut_annee + 1; 

                  }
                $arrayReturn[]=$arrayMounth[$indexmois]." ".$year;

                if($indexmois==11){ 
                    $indexmois=0;
                 }else{
                     $indexmois++; 
                 }
            }

            return $arrayReturn;
        }
    }
?>