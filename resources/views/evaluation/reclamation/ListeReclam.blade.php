@extends('layout')

    @section('title')
        Inscription
    @endsection

    @section('style')
        <link rel="stylesheet" media="screen, print" href="/assets/css/datagrid/datatables/datatables.bundle.css" />
    @endsection

    @section('breadcrumbParent')
        Evaluation
    @endsection

    @section('breadcrumbChild')
        Gestion de note
    @endsection

    @section('badge')
            <sup class='badge badge-warning fw-800' style="letter-spacing:2px;font-size:12px">Liste Dispo pour Réclamation</sup>
    @endsection

    @section('contents')
    <div id="panel-1" class="panel" >
        <div class="panel-hdr">
            <h2>
                Information Classe de:<span class="fw-300 badge badge-warning" style="font-size:15px"><i>3 ème</i></span>
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
                                    <input id="input-group-size" name="numCommande" value=''
                                    style="letter-spacing: 2px" type="text" class="form-control" 
                                    placeholder="3 ème inter Trimestre" aria-describedby="input-group-size" readonly>
                                </div>

                                <div class="input-group input-group mt-2">
                                    
                                    <div class="input-group-append">
                                        <span class="input-group-text" style="letter-spacing: 2px">
                                            Date---:
                                        </span>
                                    </div>
                                    <input id="input-group-size" name="numCommande" value=''
                                    style="letter-spacing: 2px" type="text" class="form-control" 
                                    placeholder="02/03/2023" aria-describedby="input-group-size" readonly>
                                </div>

                                <div class="input-group input-group mt-2">
                                    
                                    <div class="input-group-append">
                                        <span class="input-group-text" style="letter-spacing: 2px">
                                            Matière:
                                        </span>
                                    </div>
                                    <input id="input-group-size" name="numCommande" value=''
                                    style="letter-spacing: 2px" type="text" class="form-control" 
                                    placeholder="Mathématique" aria-describedby="input-group-size" readonly>
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
                                <input id="input-group-size" name="numCommande" value=''
                                style="letter-spacing: 2px" type="text" class="form-control" 
                                placeholder="SOLOFONARINDRA" aria-describedby="input-group-size" readonly>
                            </div>

                            <div class="input-group input-group mt-2">
                                
                                <div class="input-group-append">
                                    <span class="input-group-text" style="letter-spacing: 2px">
                                        Coefficient:
                                    </span>
                                </div>
                                <input id="input-group-size" name="numCommande" value=''
                                style="letter-spacing: 2px" type="text" class="form-control" 
                                placeholder="3" aria-describedby="input-group-size" readonly>
                            </div>

                            <div class="input-group input-group mt-2">
                                
                                <div class="input-group-append">
                                    <span class="input-group-text" style="letter-spacing: 2px">
                                        Année Scolaire:
                                    </span>
                                </div>
                                <input id="input-group-size" name="numCommande" value=''
                                style="letter-spacing: 2px" type="text" class="form-control" 
                                placeholder="2012-2013" aria-describedby="input-group-size" readonly>
                            </div>
                            
                        </div>
                            
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

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
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Client</th>
                                    <th>Account#</th>
                                    <th>Office</th>
                                    <th>Age.</th>
                                    <th>Payment date</th>
                                    <th>Transfer Amount</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Client</th>
                                    <th>Account#</th>
                                    <th>Office</th>
                                    <th>Age.</th>
                                    <th>Payment date</th>
                                    <th>Transfer Amount</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </tfoot>
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
                        <h5 class="modal-title h4 text-white">Réclamation de note</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">

                            <div class="card mb-3" style="box-shadow: 5px 4px 11px 5px #9a9996 ; border:1px solid #584475;">
                               <div class="card-body p-3">
                                   <h5>
                                       <a href="#" class="badge badge-warning">Classe de 3ème</a>
                                       <span class="badge badge-primary fw-n position-absolute pos-top pos-right mt-3 mr-3">A</span>
                                   </h5>
                                 
                               </div>
                               
                           </div>
                           <div class="card mb-5" style="box-shadow: 5px 4px 11px 5px #9a9996 ; border:1px solid #584475;">
                               
                               <div class="card-body p-3">
                               
                               		<form action="" method="post">
                                       <div class="form-group">
					                        <label class="form-label" for="id" style="font-weight:bold">Clé:</label>
					                        <input type="text" name="id" id="id" class="form-control"  placeholder="" readonly>
					                       
					                    </div>
                                        <div class="form-group">
					                        <label class="form-label" for="eleve_id" style="font-weight:bold">N Matricul:</label>
					                        <input type="text" name="eleve_id" id="eleve_id" class="form-control"  placeholder="" readonly>
					                       
					                    </div>
					                    <div class="form-group">
					                        <label class="form-label" for="libelle" style="font-weight:bold">Nom:</label>
					                        <input type="text" name="name" id="libelle" class="form-control"  placeholder="Narindra" >
					                       
					                    </div>
					                    <div class="form-group">
					                        <label class="form-label" for="note" style="font-weight:bold">Note:</label>
					                        <input type="number" name="note" id="note" class="form-control" placeholder="17">
					                      
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
         <script src="/assets/js/datagrid/datatables/datatables.bundle.js"></script>
         <script src="/assets/js/customJs/tableNoteModif.js"></script> 
        
    @endsection