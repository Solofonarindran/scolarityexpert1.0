<?php

namespace App\Http\Controllers;
use App\Repository\InscritRepository;
use App\Repository\OperationRepository;
use App\Repository\MouvementRepository;
use App\Models\Anneescolaire;
class DashboardController extends Controller

{
    
    
    public function dashboard(InscritRepository $inscritRepo,
                             MouvementRepository $mouvRepo,
                             OperationRepository $operationRepo,
                             Anneescolaire $anneesco)
    {
        $annee_id=session('annee_id');
      
        $annee=$anneesco::find($annee_id);

        $inscrits=$inscritRepo->getByAnneeId($annee_id);
        $effectif=$inscrits->count('id');
        //somme total des écolages , TM ,parti....
        $ressource=$mouvRepo->sumMontant($annee_id);
       //somme des charges 
        $charge=$operationRepo->sumCharge($annee_id);



        $tm_paye=$inscritRepo->TMpaye($annee_id);
        $friandise_paye=$inscritRepo->FriandisePaye($annee_id);
        $participation_paye=$inscritRepo->ParticipationPaye($annee_id);



                /*------ --------- ---- */
                $arrayDetail=[];
        //Données utilisées dans Détails ressources
        $sumtm=0;
        $sumPart=0;
        $sumFriand=0;
        $sumDroit=0;

        foreach($tm_paye as $tm)
        {
            $sumtm+=$tm->classe->cycle->tm;
        }

        foreach($participation_paye as $participation)
        {
            $sumPart+=$participation->classe->cycle->participation;
        }

        foreach($friandise_paye as $friandise)
        {
            $sumFriand+=$friandise->classe->cycle->friandise;
        }

        foreach($inscrits as $inscrit)
        {
            $sumDroit+=$inscrit->classe->cycle->droit;
        }

       $arrayDetail['tm']=$sumtm;
       $arrayDetail['participation']=$sumPart;
       $arrayDetail['friandise']=$sumFriand;
       $arrayDetail['droit']=$sumDroit;

                /* ------ ----------- ------*/
                $arrayNb=[];
        //Données utilisées dans le pourcentage de Paiement
        $arrayNb['tmpaye']=$tm_paye->count('id');
        $arrayNb['friandisepaye']=$friandise_paye->count('id');
        $arrayNb['ecolagepaye']=$inscritRepo->nbEcolagepaye($annee_id);
        $arrayNb['participationpaye']=$participation_paye->count('id');
        $arrayNb['participationpayant']=$inscritRepo->nbParticipation($annee_id);

        //return $effectif;
        return view('dashboard',compact('arrayNb','arrayDetail','effectif','ressource','charge','annee'));
    }

}
