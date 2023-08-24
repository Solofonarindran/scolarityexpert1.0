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
        <sup class='badge badge-warning fw-800' style="letter-spacing:2px;font-size:12px">Par examen</sup>
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
                                            <h4 style="letter-spacing:2px">Classe :</h4> 
                                        </td>
                                        <td>
                                          {{$resultats[0]->inscrit->classe->libelle}}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <h4 style="letter-spacing:2px">Examen:</h4> 
                                       
                                        </td>
                                        <td>
                                           {{$resultats[0]->examen->examen_title}}
                                        </td>
                                    </tr>  
                
                                    <tr>
                                        <td>
                                            <h4 style="letter-spacing:2px">Année:</h4> 
                                       
                                        </td>
                                        <td>
                                           {{$resultats[0]->inscrit->anneescolaire->libelle}}
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
                            $avg=$resultat->weighted_sum/$resultat->total_coeff;
                            if($avg>=$resultat->inscrit->classe->bareme){
                                $j++;
                            }
                            $effectif++;
                        }

                    ?>
                    <div class="col-sm-4 ml-sm-auto mr-4" style="">

                        <div class="d-flex mr-4 position-relative" style="height:100%;">
                            <div class="js-easy-pie-chart color-warning-500 position-relative d-inline-flex align-items-center justify-content-center" style="" data-percent="{{number_format($j/$effectif,2)*100}}" data-piesize="110" data-linewidth="10" data-scalelength="5">
                                                <div class="js-easy-pie-chart color-warning-400 position-relative position-absolute pos-left pos-right pos-top pos-bottom d-flex align-items-center justify-content-center" data-percent="{{number_format($j/$effectif,2)*100}}" data-piesize="70" data-linewidth="5" data-scalelength="1" data-scalecolor="#fff">
                                                    <div class="position-absolute pos-top pos-left pos-right pos-bottom d-flex align-items-center justify-content-center fw-800 fs-xl text-dark">{{number_format($j/$effectif,2)*100}}%</div>
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
                                @foreach ($resultats as $resultat)
                                    <tr>
                                        <td class="text-center">{{$i}}</td>
                                        <td class="text-center">{{$resultat->inscrit->id}}</td>
                                        <td class="text-center">{{$resultat->inscrit->eleve->name}}</td>
                                        <td class="text-center">{{$resultat->inscrit->eleve->firstname}}</td>
                                        <?php
                                            $avgM=number_format($resultat->weighted_sum/$resultat->total_coeff,2);
                                        ?>
                                        <td class="text-center">{{$avgM}}</td>
                                        <td class="text-center">
                                            @if ($avgM >=$resultat->inscrit->classe->bareme)
                                                <span class="badge badge-success">succès</span>
                                            @else
                                                <span class="badge badge-secondary">échec</span>
                                            @endif
                                        </td>
                                        <td class="text-center"><a href="{{route('response.recherche',['id'=>$resultat->inscrit->id,'id_classe'=>$resultat->inscrit->classe_id,'id_annee'=>$resultat->inscrit->anneescolaire_id])}}" class="select btn btn-sm btn-outline-success">Voir Plus</a></td>
                                    </tr>
                                    <?php
                                        $i++;
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
