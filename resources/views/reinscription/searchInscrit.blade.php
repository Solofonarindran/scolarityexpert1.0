@extends('layout')

    @section('title')
        RéInscription
    @endsection

    @section('token')
        <meta name="csrf-token" content="{{ csrf_token() }}">
    @endsection

    @section('style')

        <link rel="stylesheet" media="screen, print" href="/assets/css/datagrid/datatables/datatables.bundle.css" />
        
    @endsection

    @section('breadcrumbParent')
        Recherche
    @endsection

    @section('breadcrumbChild')
        Liste des élèves
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
                                    <th>Mère</th>
                                    <th>Classe</th>
                                    <th>status</th>
                                    <th>Clé</th>
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
                                        <td>{{$inscrit->eleve->geniteur->name_mother}}</td>
                                        <td>{{$inscrit->classe->libelle}}</td>
                                        
                                        <td>
                                            @if ($inscrit->admis)
                                                <span class="badge badge-success">Admis</span>
                                            @else
                                                 <span class="badge badge-secondary">Non admis</span>
                                            @endif
                                        </td>
                                        <td>{{$inscrit->classe->id}}</td>
                                        <td><button type="button"  data-toggle="modal" data-target="#default-example-modal-lg-center" class="select btn btn-sm btn-outline-success">select</button></td>
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


    <!-- Modal center Large -->
    <div class="modal fade" id="default-example-modal-lg-center" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="font-weight:800;letter-spacing:2px">Confirmation de réinscription</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4">
                        <!-- Kitchen sink example -->
                            <center id="panel-1" class="panel pb-3" style="height:100%">
                                <div class="img-profile mt-3 mb-3 overflow-hidden">
                                    <img src="/assets/img/demo/avatars/avatar-a.png" class="rounded-pill" width="50%" alt=""
                                        srcset=""/>
                                </div>
                                <h2 class="name text-dark" style="text-transform:uppercase;font-weight:800">SOLOFONARINDRA</h2>
                                <h3 class="firstname text-dark mb-4" style="text-transform:capitalize">Herinantenaina</h3>
                                <div class="form-group">
                             
                                    <div class="stat"><span class="badge badge-warning" style="font-weight:800;font-size:20px">admis</span></div>
                                </div>
                            </center>
                        </div>
                        <div class="col-lg-4" style="display:flex;justify-content:center;align-items:center">
                            <form action="" method="post">
                               <div class="form-group">
                                    <label for="exampleFormControlInput1" style="font-weight:800">Cycle:</label>
                                    <input type="text" name="cycle" class="form-control" id="exampleFormControlInput1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1" style="font-weight:800">Droit à payer:</label>
                                    <input type="text" name="droit" class="form-control" id="exampleFormControlInput1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1" style="font-weight:800">Frais Scolaire:</label>
                                    <input type="text" name="frais" class="form-control" id="exampleFormControlInput1">
                                </div>
                                
                            </form>
                        </div>
                        <div class="col-lg-4" style="display:flex;justify-content:center;align-items:center">
                            <form action="{{route('ajoutReinscrit')}}" method="post">
                                @csrf
                               <div class="form-group">
                                    <label for="exampleFormControlInput1" style="font-weight:800">Matricule:</label>
                                    <input type="text"  name="eleve_id" class="form-control" id="exampleFormControlInput1">
                                    <input type="text"  name="inscrit_id" class="form-control" id="exampleFormControlInput1" hidden>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1" style="font-weight:800">Classe Suivante:</label>
                                    <select name="classe_id" class="classe form-control" id="selectClasseDispo">
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1" style="font-weight:800">Somme à payer:</label>
                                    <input type="text" name="somme" class="form-control" id="exampleFormControlInput1" >
                                </div>

                                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                <button type="submit" class="btn btn-primary"> Valider </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    
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
            $(document).ready(function()
            {
                $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    })

                    $(document).on('click','table button.select',function()
                    {
                        var tr=$(this).closest('tr')

                        let id_classe=tr.find('td:eq(9)').text()
                        let status=tr.find('td:eq(8)').text()
                        let firstname=tr.find('td:eq(3)').text()
                        let name=tr.find('td:eq(2)').text()
                        let matricule=tr.find('td:eq(1)').text()
                        let inscrit=tr.find('td:eq(0)').text()
                        
                        $('h2.name').text(name)
                        $('h3.firstname').text(firstname)
                        $('input:text[name=eleve_id]').val(matricule)
                        $('input:text[name=inscrit_id]').val(inscrit)

                        //couleur et valeur de badge
                        $('div.stat span.badge').text(status)
                        //$('div.stat span').addClassList('badge badge-secondary')

                        $.ajax({
                            type:"post",
                            url:"{{route('classeSuiv')}}",
                            dataType:"json",
                            data:{
                                'id':id_classe,
                                'status':status
                            },
                            success:function(response){
                                
                                var cycle=response[0].cycle

                                    var total=cycle.droit+cycle.frais_scolaire
                                    $('input:text[name=cycle]').val(cycle.libelle)
                                    $('input:text[name=droit]').val(cycle.droit)
                                    $('input:text[name=frais]').val(cycle.frais_scolaire)
                                    $('input:text[name=somme]').val(total)
                            
                                var option=''
                                
                                for(var classe of response)
                                {
                                    option+='<option value="'+classe.id+'">'+classe.libelle+'</option>'
                                }
                                
                                $('select.classe').html(option)
                            }


                        })
                    })
            })
         </script>
        
    @endsection