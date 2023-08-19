@extends('layout')

    @section('title')
        Résultat
    @endsection

    @section('style')
        <link rel="stylesheet" href="/assets/css/custom-css/gestion-inscription-etape-1.css">
    @endsection

    @section('breadcrumbParent')
       Evaluation
    @endsection

    @section('breadcrumbChild')
        Résultat
    @endsection

    @section('badge')
        <sup class='badge badge-warning fw-800' style="letter-spacing:2px;font-size:12px">Choix d'option</sup>
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
                  
                    <a href="{{route('resultat.choixGle')}}" class="btn btn-sm btn-outline-success d-flex align-items-center" style="height:auto;margin:10px; letter-spacing:2px;font-weight:800" >
                        <i class="fa-2x fal fa-globe mr-2"></i>Général
                        
                    </a>
                   
                    <button data-toggle="modal" data-target=".example-modal-default-transparent" class="btn btn-outline-warning d-flex align-items-center" style="height:auto;margin:10px; letter-spacing:2px;font-weight:800">
                        <i class="fa-2x fal fa-user-circle mr-2"></i>Par Elève
                    </button>
                    
                </div>
            </div>
        </div> 
       
     <!-- Modal Default Transparent -->
    <div class="modal fade example-modal-default-transparent" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-transparent" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-white">
                        Recherche par Année Scolaire
                        <small class="m-0 text-white opacity-70">
                            Selectionner l'Année Scolaire
                        </small>
                    </h4>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('resultat.recherche')}}" method="post">
                        @csrf
                        <select name="anneescolaire_id" class="form-control" id="exampleFormControlSelect1">
                            @foreach($annees as $annee)
                                <option value="{{$annee->id}}">{{$annee->libelle}}</option>
                            @endforeach
                        </select>
    
                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit" class="btn btn-sm btn-outline-primary" style="letter-spacing:2px">Confimer</button>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                   <span class="text-muted">Scolarity Expert 1.0</span>
                </div>
            </div>
        </div>
    </div>
                                            
    @endsection
