@extends('layout')

    @section('title')
        Inscription
    @endsection

    @section('style')
        <link rel="stylesheet" href="/assets/css/custom-css/gestion-inscription-etape-1.css">
    @endsection

    @section('breadcrumbParent')
        Evaluation
    @endsection

    @section('breadcrumbChild')
        Gestion de note
    @endsection

    @section('contents')

        <div class="gestion-inscription-etape-1">  

           <!--<h1 class="choix-title">Inscription</h1> -->
            <div class="choix-cycle shadow-lg">
                <div class="cycle-icon">
                    <i class="fa fa-star"></i>
                </div>
                <h2 class="choix-card-title">choix d'option</h2>
                <div class="choix-action">
                    <a href="{{route('choix.classe.exam',['opt'=>1])}}" class="btn btn-sm btn-outline-success d-flex align-items-center" style="height:auto;margin:10px; letter-spacing:2px;font-weight:800" >
                        <i class="fa-2x fal fa-plus-square mr-2"></i>Nouveau
                        
                    </a>
                   
                    <a href="{{route('choix.classe.exam',['opt'=>2])}}" class="btn btn-outline-warning d-flex align-items-center" style="height:auto;margin:10px; letter-spacing:2px;font-weight:800">
                         <i class="fa-2x fas fa-edit mr-2"></i>Réclamation
                    </a>

                    <a href="{{route('choix.classe.exam',['opt'=>3])}}" class="btn btn-outline-danger d-flex align-items-center" style="height:auto;margin:10px; letter-spacing:2px;font-weight:800">
                        <i class="fa-2x fas fa-exclamation-circle mr-2 text-danger"></i>Annulation
                    </a>
                </div>
            </div>
        </div> 
       

    @endsection
