@extends('layout')

    @section('title')
        Inscription
    @endsection

    @section('style')
         <link rel="stylesheet" media="screen, print" href="/assets/css/datagrid/datatables/datatables.bundle.css" />
         <link rel="stylesheet" media="screen, print" href="/assets/css/fa-solid.css">
    @endsection

    @section('breadcrumbParent')
       Evaluation
    @endsection

    @section('breadcrumbChild')
        Résultat
    @endsection

    @section('badge')
        <sup class='badge badge-warning fw-800' style="letter-spacing:2px;font-size:12px">Fin d'année Scolaire</sup>
    @endsection

    @section('contents')

    <div id="panel-1" class="panel" style="margin-left:20%;margin-right:20%">
        <div class="panel-hdr">
           
        </div>
        <div class="panel-container show">
            <div class="panel-content">
                <div class="row">

                    <div class="col-sm-4 d-flex">
                        <div class="table-responsive">
                            <table class="table table-clean table-sm align-self-end">
                                <tbody>
                                   
                                    <tr>
                                        <td>
                                            <h4 style="letter-spacing:2px">Année Scolaire:</h4> 
                                       
                                        </td>
                                        <td>
                                           <strong>2012-2013</strong>
                                        </td>
                                    </tr>    
                                    <tr>
                                        <td>
                                            <h4 style="letter-spacing:2px">Classe :</h4> 
                                        </td>
                                        <td>
                                        4 ème A
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4 style="letter-spacing:2px">Effectif :</h4> 
                                        </td>
                                        <td>
                                            40
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php
                        $j=0;
                        $effectif=0;
                        foreach($resultats as $resultat){
                            $avg=number_format($resultat->weighted_sum/($sumcoeff[0]->sumcoeff * 6),2);
                            
                            if($avg>=$resultat->inscrit->classe->bareme){
                                $j++;
                            }
                            $effectif++;
                        }

                    ?>
                    <div class="col-sm-4 ml-sm-auto mr-4" style="">

                        <div class="d-flex mr-4 position-relative" style="height:100%;">
                            <div class="js-easy-pie-chart color-warning-500 position-relative d-inline-flex align-items-center justify-content-center" style="" data-percent="{{$j/$effectif}}" data-piesize="110" data-linewidth="10" data-scalelength="5">
                                                <div class="js-easy-pie-chart color-warning-400 position-relative position-absolute pos-left pos-right pos-top pos-bottom d-flex align-items-center justify-content-center" data-percent="{{$j/$effectif}}" data-piesize="70" data-linewidth="5" data-scalelength="1" data-scalecolor="#fff">
                                                    <div class="position-absolute pos-top pos-left pos-right pos-bottom d-flex align-items-center justify-content-center fw-800 fs-xl text-dark">{{$j/$effectif}} %</div>
                                                </div>
                            </div>
                            <label class="mt-md-0 position-absolute" style="font-weight:bold; letter-spacing:2px ; font-size:18px;left:-18px;top:-2px">Taux</label>
                            <label class="position-absolute" style="font-weight:bold; letter-spacing:2px ; font-size:18px;right:10px;bottom:-10px">de réussite</label>
                        </div>
                        
                    </div>
                </div>  
            </div>
        </div>
    </div>

   
    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel" style="margin-left:20%;margin-right:20%"    >
                <div class="panel-hdr">
                    <h2>
                        Liste <span class="fw-300"><i>des Elèves</i></span>
                    </h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="panel-tag">
                             <h6 style="letter-spacing:2px">Admis:  {{$j}} élèves</h6> 
                             <h6 style="letter-spacing:2px">Rédoublons: {{$effectif-$j}} élèves</h6> 
                            
                            
                        </div>
                        <!-- datatable start -->
                        <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                            <thead class="bg-primary-600">
                                <tr>
                                    <th>Rang</th>
                                    <th>Matricule</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Moyenne</th>
                                    <th>Status</th>
                                    <th>More</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i=1;
                                ?>
                                @foreach ( $resultats as $resultat)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$resultat->inscrit->eleve->id}}</td>
                                    <td>{{$resultat->inscrit->eleve->name}}</td>
                                    <td>{{$resultat->inscrit->eleve->firstname}}</td>
                                    <?php
                                        $avgAnnuel=number_format($resultat->weighted_sum/($sumcoeff[0]->sumcoeff * 6),2);
                                    ?>
                                    <td class="text-center">{{$avgAnnuel}}</td>
                                    <td class="text-center">
                                        @if ($avgAnnuel >=$resultat->inscrit->classe->bareme)
                                            <span class="badge badge-success">succès</span>
                                        @else
                                            <span class="badge badge-secondary">échec</span>
                                        @endif
                                    </td>
                                    <td class="text-center"><a href="{{route('response.recherche',['id'=>$resultat->inscrit->id,'id_classe'=>$resultat->inscrit->classe_id,'id_annee'=>$resultat->inscrit->anneescolaire_id])}}" class="select btn btn-sm btn-outline-success">Voir Plus</a></td>
                                </tr>
                                    <?php
                                        $i++
                                    ?>
                                @endforeach
                            </tbody>
                    
                        </table>
                        <!-- datatable end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
                   

       

    @endsection


    @section('script')
        <script src="/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
        <script src="/assets/js/datagrid/datatables/datatables.bundle.js"></script>
        <script src="/assets/js/datagrid/datatables/datatables.export.js"></script>
        <script src="/assets/js/customJs/dataTableExport.js"></script> 
    @endsection
