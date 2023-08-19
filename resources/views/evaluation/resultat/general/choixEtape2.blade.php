@extends('layout')

    @section('title')
        Inscription
    @endsection

    @section('style')
        <link rel="stylesheet" href="/assets/css/custom-css/gestion-inscription-etape-1.css">
    @endsection

    @section('breadcrumbParent')
       Gérance Inscription 
    @endsection

    @section('breadcrumbChild')
        Inscription
    @endsection

    @section('badge')
        <sup class='badge badge-warning fw-800' style="letter-spacing:2px;font-size:12px">Choix du Cycle</sup>
    @endsection

    @section('contents')

        <div class="gestion-inscription-etape-1">  

           <!--<h1 class="choix-title">Inscription</h1> -->
            <div class="choix-cycle shadow-lg">
                <div class="cycle-icon">
                    <i class="fa fa-graduation-cap"></i>
                </div>
                <h2 class="choix-card-title">choix d'option</h2>
                <div class="choix-action">
                   <!-- <button type="button" class="btn btn-outline-secondary">Général
                        
                    </button>
                   
                    <button type="button" class="btn btn-outline-primary">Par Elève
                        
                    </button>-->
                    <a href="{{route('response.option',['opt'=>1])}}" class="btn btn-sm btn-outline-primary d-flex align-items-center" style="height:auto;margin:10px; letter-spacing:2px;font-weight:800" >
                        <i class="fa-2x fal fa-sticky-note mr-2"></i>Annuel
                        
                    </a>
                   
                    <a href="{{route('response.option',['opt'=>2])}}" class="btn btn-outline-secondary d-flex align-items-center" style="height:auto;margin:10px; letter-spacing:2px;font-weight:800">
                        <i class="fa-2x fal fa-notes-medical mr-2"></i>Par examen
                    </a>
                </div>
            </div>
        </div> 
       

    @endsection
