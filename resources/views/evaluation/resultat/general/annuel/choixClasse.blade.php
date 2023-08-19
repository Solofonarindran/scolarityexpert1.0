@extends('layout')

    @section('title')
        Inscription
    @endsection

    @section('style')
        <link rel="stylesheet" href="/assets/css/custom-css/gestion-inscription-etape-2.css">
    @endsection

    @section('breadcrumbParent')
       Evaluation 
    @endsection

    @section('breadcrumbChild')
        Gestion de note
    @endsection
    
    @section('badge')
            <sup class='badge badge-warning fw-800' style="letter-spacing:2px;font-size:12px">Choix de classe</sup>
    @endsection

    @section('contents')

        <div class="gestion-inscription-etape-2">  
            
            <div class="choix-cycle shadow-lg">
                <div class="cycle-icon">
                    <i class="fa fa-graduation-cap"></i>
                </div>

                
                <form action="{{route('postClasseResultat')}}" method="POST" class="form-select">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Veuillez choisir une classe:</label>
                        <select name="classe_id" class="form-control" id="exampleFormControlSelect1">
                            @foreach($classes as $classe)
                                 <option value="{{$classe->id}}">{{$classe->libelle}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Veuillez choisir l'année Scolaire: </label>
                        <select name="annee_id" class="form-control" id="exampleFormControlSelect1">
                            @foreach ( $annees as $anneescolaire)
                                 <option value="{{$anneescolaire->id}}">{{$anneescolaire->libelle}}</option>
                            @endforeach
                            
                            
                        </select>
                    </div>

                    <div class="confirmation-button text-center">
                        <button type="reset" class="btn  btn-outline-danger">Annuler</button>
                        <button type="submit" class="btn btn-primary ml-4">Confirmer</button>

                    </div>
                </form>
            </div>
            
        </div> 
       

    @endsection
