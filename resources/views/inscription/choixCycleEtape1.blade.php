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
                    <i class="fa fa-star"></i>
                </div>
                <h2 class="choix-card-title">choix du cycle</h2>
                <div class="choix-action">
                    <button type="button" class="btn btn-outline-warning">Primaire
                        <span class="badge bg-warning-200 ml-2">4</span>
                    </button>
                   
                    <button type="button" class="btn btn-outline-default">Sécondaire
                        <span class="badge bg-warning-200 ml-2">4</span>
                    </button>
                </div>
            </div>
        </div> 
       

    @endsection
