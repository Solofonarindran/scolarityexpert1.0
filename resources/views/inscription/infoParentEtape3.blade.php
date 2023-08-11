@extends('layout')

    @section('title')
        Inscription
    @endsection

    @section('style')
        <link rel="stylesheet" media="screen, print" href="/assets/css/datagrid/datatables/datatables.bundle.css" />
        <link rel="stylesheet" href="/assets/css/custom-css/gestion-inscription-etape-3.css">
    @endsection

    @section('breadcrumbParent')
        Gérance Inscription
    @endsection

    @section('breadcrumbChild')
        Inscription
    @endsection

    @section('badge')
            <sup class='badge badge-warning fw-800' style="letter-spacing:2px;font-size:12px">Infos Parent</sup>
    @endsection

    @section('contents')

        <div class="gestion-inscription-etape-3">  
            
            <section class="person-info-section shadow">
               
                <h2 class="card-title">
                    <i class="fa fa-user-friends"></i>
                    INFORMATION SUR LES PARENTS
                </h2>
                <!-- card content -->
                <div class="panel-content mt-4">

                    <ul class="nav nav-tabs mb-3" role="tablist">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                href="#tab_direction-1" role="tab" aria-selected="true">Nouveau Parents</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_direction-2"
                                role="tab" aria-selected="false">Parents Existant</a></li>

                    </ul>
                    <div class="tab-content p-3">
                        <div class="tab-pane fade active show" id="tab_direction-1" role="tabpanel">
                            <form action="{{route('dataparentpost')}}" method="post">
                               @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nom Père: </label>
                                    <input type="text" name="name_father" class="form-control" id="exampleFormControlInput1" style="text-transform:uppercase"
                                        placeholder="Rakoto, rabe,...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Prénoms Père:</label>
                                    <input type="text" name="firstname_father" class="form-control" id="exampleFormControlInput1" style="text-transform:capitalize"
                                        placeholder="Andry, Irinasoa, ...">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Profession:</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="profession_father"
                                        placeholder="Comptable, Marchand, ...">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nom Mère: </label>
                                    <input type="text" name="name_mother" class="form-control" id="exampleFormControlInput1" style="text-transform:uppercase"
                                        placeholder="Rakoto, rabe,...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Prénoms Mère:</label>
                                    <input type="text" name="firstname_mother" class="form-control" id="exampleFormControlInput1" style="text-transform:capitalize"
                                        placeholder="Andry, Irinasoa, ...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Adresse:</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Andrainjato, Besavoa, Morarano,...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Profession:</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="profession_mother"
                                        placeholder="Comptable, Marchand, ...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Numéro Téléphone:</label>
                                    <input type="text" class="form-control" name="phone" id="exampleFormControlInput1"
                                        placeholder="+261 3X XX XXX XX">
                                </div>

                               

                                <div class="form-group d-flex justify-content-center">
                                    <button type="submit" class="btn btn-sm btn-outline-primary">Enregistrer</button>
                                </div>

                            </form>
                            
                        </div>
                        <div class="tab-pane fade" id="tab_direction-2" role="tabpanel">
                                <button class="btn btn-primary mb-6" data-toggle="modal" data-target=".default-example-modal-right-lg"><i class="fa fa-search mr-2"></i> Trouver un
                                Identifiant</button>
                     

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nom Père: </label>
                                    <input type="text" name="nomPere" class="form-control" id="exampleFormControlInput1" style="text-transform:uppercase"
                                        disabled>
                                </div>
                   
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Profession:</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="professionPere"
                                        disabled>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nom Mère: </label>
                                    <input type="text" name="nomMere" class="form-control" id="exampleFormControlInput1" style="text-transform:uppercase"
                                        disabled>
                                </div>
                               
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Adresse:</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        name=adress>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Profession:</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="profession_mother"
                                        disabled>
                                </div>
                                

                                <form action="{{route('passidparent')}}" method="post">
                                    @csrf
                                    <div class="form-group ">
                                        <label for="exampleFormControlInput1">Identifiant: </label>
                                        <input type="text" name="geniteur_id" class="form-control" id="exampleFormControlInput1" hidden>
                                        <input type="text" name="geniteur_id" class="form-control" id="exampleFormControlInput1" disabled>
                                    </div>

                                    <div class="form-group d-flex justify-content-center">
                                        <button type="submit" class="btn btn-sm btn-outline-primary">Enregistrer</button>
                                    </div>

                                </form>
                            
                        </div>

                    </div>
                </div>
            </section>
        </div> 

         <!-- Modal Right Large -->
         <div class="modal fade default-example-modal-right-lg" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-right modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title h4">Informations des parents</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Liste <span class="fw-300"><i>des Parents</i></span>
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
                                                        <th>Nom Père</th>
                                                        <th>Nom Mère</th>
                                                        <th>Adresse</th>
                                                        <th>Carrière Mère</th>
                                                        <th>Carrière Père</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($parents as $parent)

                                                        <tr>
                                                            <td>{{$parent->id}}</td>
                                                            <td>{{$parent->name_father}}</td>
                                                            <td>{{$parent->name_mother}}</td>
                                                            <td>{{$parent->adress}}</td>
                                                            <td>{{$parent->profession_mother}}</td>
                                                            <td>{{$parent->profession_father}}</td>
                                                           
                                                            <td><button type="button"  data-dismiss="modal" id="select" class="btn btn-sm btn-outline-success">select</button></td>
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
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        
                    </div>
                </div>
            </div>
        </div>
       

    @endsection

    @section('script')
        <script src="/assets/js/datagrid/datatables/datatables.bundle.js"></script>
        <script src="/assets/js/datagrid/datatables/datatables.export.js"></script>
        <script src="/assets/js/customJs/dataTableExport.js"></script> 

        <script>

            $(document).ready(function(){
                   $(document).on('click','table tbody button#select',function(){
                        var id=$(this).closest('tr').find('td:first-child')
        
                        $('input:text[name=geniteur_id]').val(id.text())
                   }) 
            })

        </script>
    @endsection
