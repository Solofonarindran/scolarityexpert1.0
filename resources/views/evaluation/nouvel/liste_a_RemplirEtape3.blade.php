
@extends('layout')

    @section('title')
        Inscription
    @endsection

    @section('token')
        <meta name="csrf-token" content="{{ csrf_token() }}">
    @endsection

    @section('style')
        <link rel="stylesheet" media="screen, print" href="/assets/css/datagrid/datatables/datatables.bundle.css" />
        <link rel="stylesheet" href="/assets/css/custom-css/Note-ListeRemplir-etape-3.css">
    @endsection

    @section('breadcrumbParent')
        Evaluation
    @endsection

    @section('breadcrumbChild')
        Gestions de notes
    @endsection

    @section('badge')
        <sup class='badge badge-warning fw-800' style="letter-spacing:2px;font-size:12px">Elèves à notés</sup>
    @endsection



    @section('contents')

            <div id="panel-1" class="panel" >
                <div class="panel-hdr">
                    <h2>
                        Information Classe de:<span class="fw-300 badge badge-warning" style="font-size:15px"><i>{{$inscrits[0]->classe->libelle}}</i></span>
                    </h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="panel-tag">
                            
                        </div>
                    
                        <div class="row">

                            <div class="col-xl-6 col-lg-6 carte">

                                <div class="carte-child rounded m-2 shadow-sm" >

                                   <!-- <div class="shadow-sm">-->
                                        <div class="input-group input-group mt-2 mr-2">
                                            
                                            <div class="input-group-append">
                                                <span class="input-group-text" style="letter-spacing: 2px">
                                                    Examen :
                                                </span>
                                            </div>
                                            <input id="input-group-size" name="numCommande" value='{{$examen->examen_title}}'
                                            style="letter-spacing: 2px" type="text" class="form-control" 
                                            placeholder="3 ème inter Trimestre" aria-describedby="input-group-size" readonly>
                                        </div>

                                        <div class="input-group input-group mt-2">
                                            
                                            <div class="input-group-append">
                                                <span class="input-group-text" style="letter-spacing: 2px">
                                                    Date---:
                                                </span>
                                            </div>
                                            <input id="input-group-size" name="date_exam"
                                            style="letter-spacing: 2px" type="date" class="form-control" 
                                            placeholder="02/03/2023" aria-describedby="input-group-size">
                                        </div>

                                        <div class="input-group input-group mt-2">
                                            
                                            <div class="input-group-append">
                                                <span class="input-group-text" style="letter-spacing: 2px">
                                                    Matière:
                                                </span>
                                            </div>
                                            <input id="input-group-size" name="matiere" value='{{$charger[0]->matiere->libelle}}'
                                            style="letter-spacing: 2px" type="text" class="form-control" 
                                            aria-describedby="input-group-size" readonly>
                                        </div>
                                   <!-- </div>-->
                                    

                                </div>
                                    
                            </div>
                            <div class="col-xl-6 col-lg-6 carte"> 
                                
                                <div class="carte-child rounded m-2 shadow-sm">

                                    <div class="input-group input-group mt-2 mr-2">
                                        
                                        <div class="input-group-append">
                                            <span class="input-group-text" style="letter-spacing: 2px">
                                                Proffesseur:
                                            </span>
                                        </div>
                                        <input id="input-group-size" name="professeur" value='{{$charger[0]->professeur->name}}'
                                        style="letter-spacing: 2px" type="text" class="form-control" 
                                         aria-describedby="input-group-size" readonly>
                                    </div>

                                    <div class="input-group input-group mt-2">
                                        
                                        <div class="input-group-append">
                                            <span class="input-group-text" style="letter-spacing: 2px">
                                                Coefficient:
                                            </span>
                                        </div>
                                        <input id="input-group-size" name="numCommande" value='{{$charger[0]->coefficient}}'
                                        style="letter-spacing: 2px" type="text" class="form-control" 
                                        placeholder="3" aria-describedby="input-group-size" readonly>
                                    </div>

                                    <div class="input-group input-group mt-2">
                                        
                                        <div class="input-group-append">
                                            <span class="input-group-text" style="letter-spacing: 2px">
                                                Année Scolaire:
                                            </span>
                                        </div>
                                        <input id="input-group-size" name="numCommande" value="{{session('annee');}}"
                                        style="letter-spacing: 2px" type="text" class="form-control" 
                                        placeholder="2012-2013" aria-describedby="input-group-size" readonly>
                                    </div>
                                    
                                </div>
                                  
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>


            <!-- Begin Panel du tableau -->
    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel" style="margin-left:15%;margin-right:15%">
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
                                    
                                    <th>ID inscription</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Note</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($inscrits as $inscrit)
                                    <tr class="ligne{{$inscrit->id}}">
                                        <td>{{$inscrit->id}}</td>
                                        <td>{{$inscrit->eleve->name}}</td>
                                        <td>{{$inscrit->eleve->firstname}}</td>
                                        <td id="note{{$inscrit->id}}">--</td>
                                        <td>
                                            <button type="button" id="noter" data-toggle="modal" data-target=".example-modal-right-transparent" class="btn btn-sm btn-outline-success" title="Noter"><i class="fal fa-save"></i> </button>
                                            <button type="button" class="btn btn-sm btn-outline-danger" title="Effacer"><i class="fal fa-times-circle"></i></button>
                                        </td>
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

     <!-- Modal Right Transparent-->
     <div class="modal fade example-modal-right-transparent" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-right modal-sm modal-transparent">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title h4 text-white">Remplir le note</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">

                            <div class="card mb-3" style="box-shadow: 5px 4px 11px 5px #9a9996 ; border:1px solid #584475;">
                               <div class="card-body p-3">
                                   <h5>
                                       <a href="#" class="badge badge-warning">Classe de {{$inscrits[0]->classe->libelle}}</a>
                                       <span class="badge badge-primary fw-n position-absolute pos-top pos-right mt-3 mr-3">A</span>
                                   </h5>
                                 
                               </div>
                               
                           </div>
                           <div class="card mb-5" style="box-shadow: 5px 4px 11px 5px #9a9996 ; border:1px solid #584475;">
                               
                               <div class="card-body p-3">
                               
                               	<!--	<form action="" method="post">
                                        @csrf-->
                                       

                                        <div class="form-group">
					                        <label class="form-label" for="inscrit_id" style="font-weight:bold">N° Inscrit:</label>
					                        <input type="text" name="inscrit_id" id="inscrit_id" class="form-control"  placeholder="" readonly>
                                            
					                    </div>
					                    <div class="form-group">
					                        <label class="form-label" for="libelle" style="font-weight:bold">Nom:</label>
					                        <input type="text" name="name" id="libelle" class="form-control"  placeholder="Narindra" >
					                       
					                    </div>
                                        <div class="form-group">
					                        <label class="form-label" for="date" style="font-weight:bold">Date Examen:</label>
					                        <input type="date" name="date" id="date" class="date form-control" readonly>
                                            <span class="text-danger date_error"></span>
					                    </div>
					                    <div class="form-group">
					                        <label class="form-label" for="note" style="font-weight:bold">Note:</label>
					                        <input type="number" name="note" id="note" class="note form-control" placeholder="">
                                            <span class="text-danger note_error"></span>
    
					                    </div>
					                   
				
					                    <div class="d-inline-flex" style="width:100%;margin-left:40px">
                                            <button type="button" class="btn btn-sm btn-outline-secondary mr-3" data-dismiss="modal" style="margin-right:30px">Annuler</button>
                                            <button type="button" id="savenewnote" class="btn btn-sm btn-outline-primary mr-1">Enregistrer</button> 
					                    		
					                    </div>
					                    
					                <!--</form> -->
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
        <!-- <script src="/assets/js/customJs/remplir.js"></script>-->
        <script>
            $(document).ready(function(){
                $(document).on('click','table.table button#noter',function()
                {
                    
                    let date=$('input[name=date_exam]').val()
                    if(date==="")
                    {
                        alert('Ajouter la date d_examen')
                    }else{
                        $('input[name=date]').val(date)
                    }
                    


                    let tr=$(this).closest('tr')

                    var id_inscrit=tr.find('td:eq(0)').text()
                    let name=tr.find('td:eq(1)').text()

                    $('input:text[name=inscrit_id]').val(id_inscrit)
                    $('input:text[name=name]').val(name)
                
                    $(document).on('click','button#savenewnote',function()
                    {
                        

                        let note=$('input[name=note]').val()
                        let date=$('input[name=date]').val()

                        if(date==="")
                        {
                            $('span.date_error').text('Revient à la selection de la date')
                        }else if(note==="")
                        {
                            $('span.note_error').text('Champ Obligatoire')
                        }else{

                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            })

                            $.ajax({
                                type:"post",
                                url:"{{Route('add.note')}}",
                                dataType:"json",
                                data:
                                {
                                    "inscrit_id":id_inscrit,
                                    "date":date,
                                    "note":note
                                },
                
                                success:function(response){
                                    
                                    $('tr.ligne'+response).slideUp().delay(8000)
                                }
                
                            })

                            $('#note'+id_inscrit).html("<h5>"+note+"<i class='fal fa-check ml-2 text-success'></i></h5>")
                        }

                        
                        
                    })

                })
            })
        </script>
    @endsection