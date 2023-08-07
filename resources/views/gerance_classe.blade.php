@extends('layout')

    @section('title')
        Gérance de Classe
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
                    <a href="#" class="badge badge-warning">Primaire</a>
                    <span class="name-separator">/</span>
                    <span class="name-details"><i class="fa fa-user"></i> 2480</span>
                    <span class="name-separator">/</span>
                    <span class="name-details"><i class="fa fa-school"></i> 10</span>
                    <span class="name-separator">/</span>
                    <span class="name-details"><i class="fa fa-bullhorn"></i> 203</span>
                </h1>
                <div class="classe-card border shadow">

                    <div class="card-call-to-ation ">
                        <button class="btn action-btn" data-toggle="modal" data-target=".example-modal-left-transparent"><i class="fa fa-pen"></i></button>
                        <button class="btn action-btn"><i class="fa fa-trash"></i></button>
                    </div>
                    <!-- card content  -->
                    <div class="classe-name">
                        <h3>4<sup>ème</sup> B</h3>
                        <div class="classe-price">
                            <span>20.000 Ar/mois</span>
                        </div>
                    </div>
                    <div class="classe-info">
                        <div class="info-item">
                            <h5><strong>Effectif maximale:</strong></h5>
                            <span><i class="fa fa-school"></i> 150</span>
                        </div>
                        <div class="info-item">
                            <h5><strong>Etudiant actuel:</strong></h5>
                            <span><i class="fa fa-user"></i> 50</span>
                        </div>
                        <div class="info-item">
                            <h5><strong>Place disponnible:</strong></h5>
                            <span><i class="fa fa-bullhorn"></i> 100</span>
                        </div>
                    </div>


                </div>
                <div class="classe-card add-card border">
                    <button type="button" id="newPrimaryClass" class="btn btn-outline-warning" data-toggle="modal" data-target=".example-modal-right-transparent">
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
                <div class="classe-card border shadow">
                    
                    <div class="card-call-to-ation ">
                        <button class="btn action-btn" data-toggle="modal" data-target=".example-modal-left-transparent"><i class="fa fa-pen"></i></button>
                        <button class="btn action-btn"><i class="fa fa-trash"></i></button>
                    </div>
                    <!-- card content  -->
                    <div class="classe-name">
                        <h3>4<sup>ème</sup> B</h3>
                        <div class="classe-price">
                            <span>20.000 Ar/mois</span>
                        </div>
                    </div>
                    <div class="classe-info">
                        <div class="info-item">
                            <h5><strong>Effectif maximale:</strong></h5>
                            <span><i class="fa fa-school"></i> 150</span>
                        </div>
                        <div class="info-item">
                            <h5><strong>Etudiant actuel:</strong></h5>
                            <span><i class="fa fa-user"></i> 50</span>
                        </div>
                        <div class="info-item">
                            <h5><strong>Place disponnible:</strong></h5>
                            <span><i class="fa fa-bullhorn"></i> 100</span>
                        </div>
                    </div>


                </div>
                <div class="classe-card add-card border shadow">
                    <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target=".example-modal-right-transparent">
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
                        <h5 class="modal-title h4 text-white">Ajout d'une classe</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">

                            <div class="card mb-3" style="box-shadow: 5px 4px 11px 5px #9a9996 ; border:1px solid #584475;">
                               <div class="card-body p-3">
                                   <h5>
                                       <a href="#" class="badge badge-warning">Primaire</a>
                                       <span class="badge badge-primary fw-n position-absolute pos-top pos-right mt-3 mr-3">A</span>
                                   </h5>
                                 
                               </div>
                               
                           </div>
                           <div class="card mb-5" style="box-shadow: 5px 4px 11px 5px #9a9996 ; border:1px solid #584475;">
                               
                               <div class="card-body p-3">
                               
                               		<form action="{{route('classe.edit')}}" method="post">
                                        @csrf
                                       <div class="form-group">
					                        <label class="form-label" for="cycle_id" style="font-weight:bold">Clé du cycle:</label>
					                        <input type="text" name="cycle_id" id="cycle_id" class="form-control" readonly>
					                       
					                    </div>
					                    <div class="form-group">
					                        <label class="form-label" for="libelle" style="font-weight:bold">Libellé (Nom):</label>
					                        <input type="text" name="libelle" id="libelle" class="form-control"  placeholder="8 ème" >
					                       
					                    </div>
					                    <div class="form-group">
					                        <label class="form-label" for="frais_scolaire" style="font-weight:bold">Ecolage :</label>
					                        <input type="number" name="frais_scolaire" id="frais_scolaire" class="form-control" placeholder="35000">
					                      
					                    </div>
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
					                        <select class="form-control" id="example-select">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>  
                                                <option>5</option>
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
                        <h5 class="modal-title h4 text-white">Modification d'une classe</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                            <div class="card mb-3" style="box-shadow: 5px 4px 11px 5px #9a9996 ; border:1px solid #584475;">
                               <div class="card-body p-3">
                                   <h5>
                                       <a href="#" class="badge badge-warning">Primaire</a>
                                       <span class="badge badge-primary fw-n position-absolute pos-top pos-right mt-3 mr-3">A</span>
                                   </h5>   
                               </div>  
                           </div>
                           <div class="card mb-5" style="box-shadow: 5px 4px 11px 5px #9a9996 ; border:1px solid #584475;">  
                               <div class="card-body p-3">
                               		<form action="" method="post">
					                    <div class="form-group">
					                        <label class="form-label" for="libelle" style="font-weight:bold">Libellé (Nom):</label>
					                        <input type="text" name="libelle" id="libelle" class="form-control"  placeholder="8 ème" >
					                    
					                    </div>
					                    <div class="form-group">
					                        <label class="form-label" for="frais_scolaire" style="font-weight:bold">Ecolage :</label>
					                        <input type="number" name="frais_scolaire" id="frais_scolaire" class="form-control" placeholder="35000">
					                      
					                    </div>
					                    <div class="form-group">
					                        <label class="form-label" for="bareme" style="font-weight:bold">Barême de passage :</label>
					                        <input type="number" name="bareme" max="12" min="9" id="bareme" class="form-control" placeholder="10">
					                       
					                    </div>
					                    <div class="form-group">
					                        <label class="form-label" for="phone" style="font-weight:bold">Classe Prédecesseur :</label>
					                        <select class="form-control" name="classe_id" id="example-select">
                                                <option value="">1</option>
                                                <option value="">2</option>
                                               
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

    @endsection

    @section('script')

        <script>
            $(document).ready(function()
            {
                $(document).on('click','#newPrimaryClass',function()
                {
                    $('input:text[name=cycle_id]').val(1)
                
                })
            })
        </script>

    @endsection
