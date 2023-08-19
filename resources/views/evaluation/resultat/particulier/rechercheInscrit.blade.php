@extends('layout')

    @section('title')
        Evaluation
    @endsection

    @section('style')

        <link rel="stylesheet" media="screen, print" href="/assets/css/datagrid/datatables/datatables.bundle.css" />
        
    @endsection

    @section('breadcrumbParent')
        Résultats
    @endsection

    @section('breadcrumbChild')
        Liste des inscrits
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
                        Tableau <span class="fw-300"><i>de Recherche</i></span> 
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
                            <p> 
                                Tapez sur la plage de recherche si vous en a besoin
                            </p>
                            
                        </div>
                        <!-- datatable start -->
                        <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                            <thead class="bg-primary-600">
                                <tr>
                                    <th>ID</th>         
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>adresse</th>
                                    <th>Père</th>
                                    <th>Mère</th>
                                    <th>Classe</th>
                                    <th>status</th>
                                   
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($inscrits as $inscrit)

                                    <tr>
                                        <td>{{$inscrit->id}}</td>
                                        
                                        <td>{{$inscrit->eleve->name}}</td>
                                        <td>{{$inscrit->eleve->firstname}}</td>
                                        <td>{{$inscrit->eleve->adress}}</td>
                                        <td>{{$inscrit->eleve->geniteur->name_father}}</td>
                                        <td>{{$inscrit->eleve->geniteur->name_mother}}</td>
                                        <td>{{$inscrit->classe->libelle}}</td>
                                        
                                        <td>
                                            @if ($inscrit->admis)
                                                <span class="badge badge-success">Admis</span>
                                            @else
                                                 <span class="badge badge-secondary">Non admis</span>
                                            @endif
                                        </td>
                                 
                                        <td><a href="{{route('response.recherche',['id'=>$inscrit->id])}}" class="select btn btn-sm btn-outline-success">select</a></td>
                                    </tr>
                                    
                                @endforeach
                                
                                
                            </tbody>
                    
                        </table>
                        <!-- datatable end -->
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