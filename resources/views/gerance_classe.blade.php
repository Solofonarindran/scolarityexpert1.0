@extends('layout')

    @section('title')
        Gérance de Classe
    @endsection

    @section('token')
        <meta name="csrf-token" content="{{ csrf_token() }}">
    @endsection
    
    @section('style')
        <link rel="stylesheet" href="/assets/css/custom-css/gerance-classe-dashboard.css">
    @endsection

    @section('breadcrumbParent')
        Gérance
    @endsection

    @section('breadcrumbChild')
        Classes
    @endsection

    @section('contents')

        <div class="gerance-classe-dasboard">  

            <div class="classe-dashboard">
                <h1 class="dashboard-name ">
                    <a href="#" class="badge badge-warning">Préscolaire</a>
                    <span class="name-separator">/</span>
                    <span class="name-details"><i class="fa fa-user"></i> 2480</span>
                    <span class="name-separator">/</span>
                    <span class="name-details"><i class="fa fa-school"></i> 10</span>
                    <span class="name-separator">/</span>
                    <span class="name-details"><i class="fa fa-bullhorn"></i> 203</span>
                </h1>

                @foreach ($prescolaires as $prescolaire)
                
                    <div class="classe-card border shadow">

                        <div class="card-call-to-ation">
                            <button class="btn_update btn action-btn" id="{{$prescolaire->id}}" data-toggle="modal" data-target=".example-modal-left-transparent"><i class="fa fa-pen"></i></button>
                            <button class="btn_delete btn action-btn" id="{{$prescolaire->id}}"><i class="fa fa-trash"></i></button>
                        </div>
                        <!-- card content  -->
                        <div class="classe-name">
                            <h3 id="libelle{{$prescolaire->id}}">{{$prescolaire->libelle}}</h3>
                            <div class="classe-price" id="frais{{$prescolaire->id}}">
                                <span id="">{{$prescolaire->cycle->frais_scolaire}} Ar/mois</span>
                            </div>
                        </div>
                        <div class="classe-info">
                            <div class="info-item" id="max{{$prescolaire->id}}">
                                <h5><strong>Effectif maximale:</strong></h5>
                                <span id="{{$prescolaire->effectifmax}}"><i class="fa fa-school"></i>{{$prescolaire->effectifmax}}</span>
                            </div>
                            <div class="info-item">
                                <h5><strong>Etudiant actuel:</strong></h5>
                                <span><i class="fa fa-user"></i>{{$prescolaire->effectifActu}}</span>
                            </div>
                            <div class="info-item">
                                <h5><strong>Place disponnible:</strong></h5>
                                <span><i class="fa fa-bullhorn"></i>{{$prescolaire->effectifmax - $prescolaire->effectifActu}}</span>
                            </div>
                        </div>


                    </div>

                @endforeach

                <div class="classe-card add-card border">
                    <button type="button" id="newPrescoClass" class="newstore btn btn-outline-warning" data-toggle="modal" data-target=".example-modal-right-transparent">
                             <i class="fa fa-plus"></i>
                    </button>
                    
                </div>
            </div>
           
            <div class="classe-dashboard">
                <h1 class="dashboard-name ">
                    <a href="#" class="badge badge-primary">Primaire</a>
                    <span class="name-separator">/</span>
                    <span class="name-details"><i class="fa fa-user"></i> 2480</span>
                    <span class="name-separator">/</span>
                    <span class="name-details"><i class="fa fa-school"></i> 10</span>
                    <span class="name-separator">/</span>
                    <span class="name-details"><i class="fa fa-bullhorn"></i> 203</span>
                </h1>

                @foreach ($primarys as $primary)
                
                    <div class="classe-card border shadow">

                        <div class="card-call-to-ation">
                            <button class="btn_update btn action-btn" id="{{$primary->id}}" data-toggle="modal" data-target=".example-modal-left-transparent"><i class="fa fa-pen"></i></button>
                            <button class="btn_delete btn action-btn" id="{{$primary->id}}"><i class="fa fa-trash"></i></button>
                        </div>
                        <!-- card content  -->
                        <div class="classe-name">
                            <h3 id="libelle{{$primary->id}}">{{$primary->libelle}}</h3>
                            <div class="classe-price" id="frais{{$primary->id}}">
                                <span id="">{{$primary->cycle->frais_scolaire}} Ar/mois</span>
                            </div>
                        </div>
                        <div class="classe-info">
                            <div class="info-item" id="max{{$primary->id}}">
                                <h5><strong>Effectif maximale:</strong></h5>
                                <span id="{{$primary->effectifmax}}"><i class="fa fa-school"></i>{{$primary->effectifmax}}</span>
                            </div>
                            <div class="info-item">
                                <h5><strong>Etudiant actuel:</strong></h5>
                                <span><i class="fa fa-user"></i>{{$primary->effectifActu}}</span>
                            </div>
                            <div class="info-item">
                                <h5><strong>Place disponnible:</strong></h5>
                                <span><i class="fa fa-bullhorn"></i>{{$primary->effectifmax - $primary->effectifActu}}</span>
                            </div>
                        </div>


                    </div>

                @endforeach

                <div class="classe-card add-card border">
                    <button type="button" id="newPrimaryClass" class="newstore btn btn-outline-primary" data-toggle="modal" data-target=".example-modal-right-transparent">
                             <i class="fa fa-plus"></i>
                    </button>
                    
                </div>
            </div>
            <div class="classe-dashboard">
                <h1 class="dashboard-name ">
                    <a href="#" class="badge badge-secondary">Secondaire</a>
                    <span class="name-separator">/</span>
                    <span class="name-details"><i class="fa fa-user"></i> 2480</span>
                    <span class="name-separator">/</span>
                    <span class="name-details"><i class="fa fa-school"></i> 10</span>
                    <span class="name-separator">/</span>
                    <span class="name-details"><i class="fa fa-bullhorn"></i> 203</span>
                </h1>

                @foreach ($secondarys as $secondary)

                    <div class="classe-card border shadow">
                        
                        <div class="card-call-to-ation ">
                            <button class="btn_update btn action-btn" id="{{$secondary->id}}" data-toggle="modal" data-target=".example-modal-left-transparent"><i class="fa fa-pen"></i></button>
                            <button class="btn_delete btn action-btn" id="{{$secondary->id}}"><i class="fa fa-trash"></i></button>
                        </div>
                        <!-- card content  -->
                        <div class="classe-name">
                            <h3>{{$secondary->libelle}}</h3>
                            <div class="classe-price">
                                <span>{{$secondary->cycle->frais_scolaire}} Ar/mois</span>
                            </div>
                        </div>
                        <div class="classe-info">
                            <div class="info-item" id="effectifmax{{$secondary->id}}">
                                <h5><strong>Effectif maximale:</strong></h5>
                                <span><i class="fa fa-school"></i> {{$secondary->effectifmax}}</span>
                            </div>
                            <div class="info-item">
                                <h5><strong>Etudiant actuel:</strong></h5>
                                <span><i class="fa fa-user"></i>{{$secondary->effectifActu}}</span>
                            </div>
                            <div class="info-item">
                                <h5><strong>Place disponnible:</strong></h5>
                                <span><i class="fa fa-bullhorn"></i>{{$secondary->effectifmax - $secondary->effectifActu}}</span>
                            </div>
                        </div>


                    </div>
                    
                @endforeach
                
                <div class="classe-card add-card border shadow">
                    <button type="button" id="newSecondaryClass" class="newstore btn btn-outline-secondary" data-toggle="modal" data-target=".example-modal-right-transparent">
                             <i class="fa fa-plus"></i>
                    </button>
                    
                </div>
            </div>
            
            
        </div> 
        <!-- Modal Right Transparent-->
        <div class="modal fade example-modal-right-transparent" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-right modal-sm modal-transparent">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title h4 text-white">Ajout Classe</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">

                            <div class="card mb-3" style="box-shadow: 5px 4px 11px 5px #9a9996 ; border:1px solid #584475;">
                               <div class="card-body p-3">
                                   <h5>
                                       <a href="#" class="badge badge-warning badge_ajout_classe">Primaire</a>
                                       <span class="badge badge-primary fw-n position-absolute pos-top pos-right mt-3 mr-3">A</span>
                                   </h5>
                                 
                               </div>
                               
                           </div>
                           <div class="card mb-5" style="box-shadow: 5px 4px 11px 5px #9a9996 ; border:1px solid #584475;">
                               
                               <div class="card-body p-3">
                               
                               		<form action="{{route('classe.store')}}" method="post">
                                        @csrf
                                       <div class="form-group">
					                        <label class="form-label" for="cycle_id" style="font-weight:bold">Clé de Cycle:</label>
					                        <input type="text" name="cycle_id" id="cycle_id" class="form-control" value="" readonly>
					                       
					                    </div>
					                    <div class="form-group">
					                        <label class="form-label" for="libelle" style="font-weight:bold">Libellé (Nom):</label>
					                        <input type="text" name="libelle" id="libelle" class="form-control"  placeholder="8 ème" >
					                       
					                    </div>
					                    <!-- <div class="form-group">
					                        <label class="form-label" for="frais_scolaire" style="font-weight:bold">Ecolage :</label>
					                        <input type="number" name="frais_scolaire" id="frais_scolaire" class="form-control" placeholder="35000">
					                      
					                    </div>-->
					                    <div class="form-group">
					                        <label class="form-label" for="bareme" style="font-weight:bold">Barême de passage :</label>
					                        <input type="number" name="bareme" max="12" min="9" id="bareme" class="form-control" placeholder="10">
					                       
					                    </div>
                                        <div class="form-group">
					                        <label class="form-label" for="effectifmax" style="font-weight:bold">Effectif max :</label>
					                        <input type="number" name="effectifmax" id="effectifmax" class="form-control" placeholder="20">
					                      
					                    </div>
					                    <div class="form-group">
					                        <label class="form-label" for="phone" style="font-weight:bold">Classe Prédecesseur :</label>
					                        <select class="form-control" name="classe_id" id="selectClassePred">
                             
                                            </select>
					                      
					                    </div>
                                  
					                    <div class="d-inline-flex" style="width:100%;margin-left:40px">
                                            <button type="button" class="btn btn-sm btn-outline-secondary mr-3" data-dismiss="modal" style="margin-right:30px">Annuler</button>
                                            <button type="submit"  class="btn btn-sm btn-outline-primary mr-1">Enregistrer</button> 
					                    		
					                    </div>
					                    
					                </form>
                               </div>   
                           </div>
                    </div>
                    <div class="modal-footer">
                        
                    </div>
                </div>
            </div>
        </div>




        <!-- Modal Left Transparent-->
        <div class="modal fade example-modal-left-transparent" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-left modal-sm modal-transparent">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title h4 text-white">Modification d'une Classe</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                            <div class="card mb-3" style="box-shadow: 5px 4px 11px 5px #9a9996 ; border:1px solid #584475;">
                               <div class="card-body p-3">
                                   <h5>
                                       <a href="#" class="badge badge-secondary badge_edit_cycle">Sécondaire</a>
                                       <span class="badge badge-primary fw-n position-absolute pos-top pos-right mt-3 mr-3">M</span>
                                   </h5>   
                               </div>  
                           </div>
                           <div class="card mb-5" style="box-shadow: 5px 4px 11px 5px #9a9996 ; border:1px solid #584475;">  
                               <div class="card-body p-3">
                               		<form action="{{route('classe.edit')}}" method="post">
                                        @csrf
                                       <div class="form-group">
					                        <label class="form-label" for="id" style="font-weight:bold">Clé du Classe:</label>
					                        <input type="text" name="id" id="id" class="form-control" value="" readonly>
					                       
					                    </div>
					                    <div class="form-group">
					                        <label class="form-label" for="libelle" style="font-weight:bold">Libellé (Nom):</label>
					                        <input type="text" name="libelle" id="libelle" class="form-control">
					                       
					                    </div>
					                   
					                    <div class="form-group">
					                        <label class="form-label" for="bareme" style="font-weight:bold">Barême de passage :</label>
					                        <input type="number" name="bareme" max="12" min="9" id="bareme" class="form-control" placeholder="10">
					                       
					                    </div>
                                        <div class="form-group">
					                        <label class="form-label" for="effectifmax" style="font-weight:bold">Effectif max :</label>
					                        <input type="text" name="effectifmax" id="effectifmax" class="form-control" placeholder="20">
					                      
					                    </div>
	
                            
					                    <div class="d-inline-flex" style="width:100%;margin-left:40px">
                                            <button type="button" class="btn btn-sm btn-outline-secondary mr-3" data-dismiss="modal" style="margin-right:30px">Annuler</button>
                                            <button type="submit"  class="btn btn-sm btn-outline-primary mr-1">Enregistrer</button> 
					                    		
					                    </div>
					                    
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
    

        <script>

            $(document).ready(function()
            {
                $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    })

                $(document).on('click','#newPrescoClass',function(){
                    $('input:text[name=cycle_id]').val('1')
                    $('h5 a.badge_ajout_classe').text('Préscolaire')

                  
                    $.ajax({
                        type:"post",
                        url:"{{Route('classe.ajax')}}",
                        dataType:"json",
                        data:
                        {   
                            "id":1
                        },
                        success:function(response){
                            var option=""
                            for(const value of response)
                            {
                                option+='<option value="'+value.id+'">'+value.libelle+'</option>'
                                
                            }

                            $('#selectClassePred').html(option)
                        }

                    })
                
                })

                $(document).on('click','#newPrimaryClass',function(){
                    $('input:text[name=cycle_id]').val('2')
                    $('h5 a.badge_ajout_classe').text('Primaire')
                
                })

                $(document).on('click','#newSecondaryClass',function(){
                    $('input:text[name=cycle_id]').val('3')
                    $('h5 a.badge_ajout_classe').text('Sécondaire')
                
                })

                $(document).on('click','.newstore',function(){

                    $('input:text[name=libelle]').val("")
                    $('input:text[name=effectifmax]').val("")

                    /* $('input:text[name=frais_scolaire]').val("")*/
                })

                $(document).on('click','.btn_update',function()
                {
                    $('h5 a.badge_edit_cycle').text('Modification')

                    //récuperer l'id de la classe à modifier
                    var id=$(this).attr('id')

                    var libelle=$('h3#libelle'+id).text()
                    var effectifmax=$('#max'+id+' span').attr('id')
                    /*var ecolage=$('#frais'+id+' span').attr('id')*/

                    $('input:text[name=id]').val(id)
                    $('input:text[name=libelle]').val(libelle)
                    $('input:text[name=effectifmax]').val(effectifmax)

                    /*$('input:text[name=frais_scolaire]').val(ecolage)*/


                })

            })
        </script>

    @endsection
