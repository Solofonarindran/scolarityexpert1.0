@extends('layout')

    @section('title')
       Fiancière
    @endsection

    @section('token')
        <meta name="csrf-token" content="{{ csrf_token() }}">
    @endsection

    @section('style')

        <link rel="stylesheet" media="screen, print" href="/assets/css/datagrid/datatables/datatables.bundle.css" />
        
    @endsection

    @section('breadcrumbParent')
        Frais-Recherche
    @endsection

    @section('breadcrumbChild')
        Liste non payé
    @endsection

    @section('badge')
            <sup class='badge badge-warning fw-800' style="letter-spacing:2px;font-size:12px">Recherche</sup>
    @endsection

    @section('contents')

    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Liste des Inscrits<span class="fw-300"><i>l'année dernière</i></span>
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
                            <p>Tapez sur la plage de recherche ... Cliquer sur le boutton <sup class="badge badge-success">select</sup></p>
                                
                        </div>
                        <!-- datatable start -->
                        <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                            <thead class="bg-primary-600">
                                <tr>
                                    <th>ID</th>
                                    <th>Matricule</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>adresse</th>
                                    <th>Père</th>
                                    <th>Classe</th>
                                    <th>Reste à payer</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($inscrits as $inscrit)

                                    <tr>
                                        <td>{{$inscrit->id}}</td>
                                        <td>{{$inscrit->eleve->id}}</td>
                                        <td>{{$inscrit->eleve->name}}</td>
                                        <td>{{$inscrit->eleve->firstname}}</td>
                                        <td>{{$inscrit->eleve->adress}}</td>
                                        <td>{{$inscrit->eleve->geniteur->name_father}}</td>  
                                        <td>{{$inscrit->classe->libelle}}</td>
                                        <td>{{$inscrit->montant_restant}}</td>
                                        <td><a href="{{route('operation.in.fr',['id'=>$inscrit->id])}}" type="button" class="btn btn-sm btn-outline-success">select</a></td>
                                    </tr>

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
         <script src="/assets/js/datagrid/datatables/datatables.bundle.js"></script>
         <script src="/assets/js/datagrid/datatables/datatables.export.js"></script>
         <script src="/assets/js/customJs/dataTableExport.js"></script> 
    @endsection