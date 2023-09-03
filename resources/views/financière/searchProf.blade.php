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
        Salaire-Recherche
    @endsection

    @section('breadcrumbChild')
        Liste des professeurs
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
                       <span class="fw-300"><i> Liste des Professeurs</i></span>
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
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>adresse</th>
                                    <th>Contact</th>
                                    <th>Rôle</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($professeurs as $professeur)

                                    <tr>
                                        <td>{{$professeur->id}}</td>
                                        <td>{{$professeur->name}}</td>
                                        <td>{{$professeur->firstname}}</td>
                                        <td>{{$professeur->adress}}</td>
                                        <td>{{$professeur->phone}}</td>  
                                        <td>{{$professeur->rule->libelle}}</td>
                                        <td><a href="{{route('operation.prof.sal',['id'=>$professeur->id])}}" type="button" class="btn btn-sm btn-outline-success">select</a></td>
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