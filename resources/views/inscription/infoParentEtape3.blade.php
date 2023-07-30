@extends('layout')

    @section('title')
        Inscription
    @endsection

    @section('style')
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
                            <form action="" method="post">

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nom: </label>
                                    <input type="name" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Rakoto, rabe,...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Prénoms:</label>
                                    <input type="name" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Andry, Irinasoa, ...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Adresse:</label>
                                    <input type="name" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Andrainjato, Besavoa, Morarano,...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Profession:</label>
                                    <input type="name" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Comptable, Marchand, ...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Numéro Téléphone:</label>
                                    <input type="name" class="form-control" id="exampleFormControlInput1"
                                        placeholder="+261 3X XX XXX XX">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">CIN:</label>
                                    <input type="name" class="form-control" id="exampleFormControlInput1"
                                        placeholder="000 000 000 000">
                                </div>

                                <div class="form-group d-flex justify-content-center">
                                    <button type="submit" class="btn btn-sm btn-outline-primary">Enregistrer</button>
                                </div>

                            </form>
                            
                        </div>
                        <div class="tab-pane fade" id="tab_direction-2" role="tabpanel">
                            <button class="btn btn-primary mb-6"><i class="fa fa-search mr-2"></i> Trouver une
                                Identifiant</button>
                            <form action="" method="post">

                                <div class="form-group ">
                                    <label for="exampleFormControlInput1">Identifiant: </label>
                                    <input type="name" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Rakoto, rabe,...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nom: </label>
                                    <input type="name" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Rakoto, rabe,..." disabled>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Prénoms:</label>
                                    <input type="name" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Andry, Irinasoa, ..." disabled>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Adresse:</label>
                                    <input type="name" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Andrainjato, Besavoa, Morarano,..." disabled>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Profession:</label>
                                    <input type="name" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Comptable, Marchand, ..." disabled>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Numéro Téléphone:</label>
                                    <input type="name" class="form-control" id="exampleFormControlInput1"
                                        placeholder="+261 3X XX XXX XX" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">CIN:</label>
                                    <input type="name" class="form-control" id="exampleFormControlInput1"
                                        placeholder="000 000 000 000" disabled>
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
       

    @endsection
