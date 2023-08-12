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
            <sup class='badge badge-warning fw-800' style="letter-spacing:2px;font-size:12px">Infos Elève</sup>
    @endsection
    
    @section('contents')

        <div class="gestion-inscription-etape-3">  
       
        <section class="person-info-section shadow">
            <h2 class="card-title">
                <i class="fa fa-user"></i>
                INFORMATION SUR L'ETUDIANT
            </h2>
            <form method="POST" action="{{route('ajouteleveInscrit')}}">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1" style="font-weight:800">Nom: </label>
                    <input type="name" name="name" class="form-control" id="exampleFormControlInput1"
                        placeholder="Rakoto, rabe,...">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1" style="font-weight:800">Prénoms:</label>
                    <input type="name" name="firstname" class="form-control" id="exampleFormControlInput1"
                        placeholder="Andry, Irinasoa, ...">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1" style="font-weight:800">Adresse:</label>
                    <input type="name" class="form-control" id="exampleFormControlInput1" name="adress"
                        placeholder="Besavoa,Lot IVN 75 Morarano,...">
                </div>


                <div class="form-group">
                    <label for="exampleFormControlInput1" style="font-weight:800">Date de naissance:</label>
                    <input type="date" name="date_naiss" class="form-control" id="exampleFormControlInput1">
                </div>


                <section class="submit-section mt-4 d-flex justify-content-center" >
                    <button class="btn btn-outline-danger mr-4" type="reset">Annuler</button>
                    <button class="btn btn-primary ml-4" type="submit">Confirmer</button>
                       
                </section>

            </form>
            
        </section>
            
        </div> 
       

    @endsection
