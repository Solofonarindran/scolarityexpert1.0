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
                    <button type="button" class="btn btn-outline-secondary">Général
                        
                    </button>
                   
                    <button type="button" class="btn btn-outline-primary">Par Elève
                        
                    </button>
                </div>
            </div>
        </div> 
       

    @endsection
