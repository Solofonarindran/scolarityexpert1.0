
@extends('layout')

    @section('title')
        Inscription
    @endsection

    @section('style')
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


            <!-- Begin Panel du tableau -->
            <div id="panel-1" class="panel" >
                <div class="panel-hdr">
                    <h2>
                        Liste des Elèves:<span class="fw-300 badge badge-warning" style="font-size:15px"><i>3 ème</i></span>
                    </h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="frame-wrap bg-faded mb-5">
                            <div class="custom-control custom-checkbox d-inline-flex mr-3">
                                <input type="checkbox" checked="checked" class="custom-control-input" id="bordered" data-class="table-bordered">
                                <label class="custom-control-label" for="bordered">Borduré le Tableau</label>
                            </div>
                            <div class="custom-control custom-checkbox d-inline-flex mr-3">
                                <input type="checkbox" class="custom-control-input" id="smaller" data-class="table-sm">
                                <label class="custom-control-label" for="smaller">Minimisé la taille</label>
                            </div>
                            <div class="custom-control custom-checkbox d-inline-flex mr-3">
                                <input type="checkbox" class="custom-control-input" id="dark" data-class="table-dark">
                                <label class="custom-control-label" for="dark">Mode Dark</label>
                            </div>
                            
                        </div>

                        <div class="frame-wrap p-0 border-0 m-0">
                            <table class="table table-bordered" id="table-example">
                                <thead>
                                    <tr>
                                        <th>N° Mcle</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Note</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>12</td>
                                        <td>Solofonarindra</td>
                                        <td>Herinantenaina</td>
                                        <td><input type="number" name="" id="" style="width:60px"></td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-outline-success" title="Enregistrer"><i class="fal fa-save"></i> </button>
                                            <button type="button" class="btn btn-sm btn-outline-danger" title="Effacer"><i class="fal fa-times-circle"></i></button>
                                            
                                        </td>
                                    </tr>
                                   
                                    
                                </tbody>
                            </table>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
    @endsection