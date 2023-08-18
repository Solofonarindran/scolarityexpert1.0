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
            <sup class='badge badge-warning fw-800' style="letter-spacing:2px;font-size:12px">Choix de classe et examen</sup>
    @endsection

    @section('contents')

        <div class="gestion-inscription-etape-2">  
            
            <div class="choix-cycle shadow-lg">
                <div class="cycle-icon">
                    <i class="fa fa-graduation-cap"></i>
                </div>

                
                <form action="{{route('postClasseExam')}}" method="POST" class="form-select">
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
                        <label for="exampleFormControlSelect1">Veuillez choisir l'examen: </label>
                        <select name="examen_id" class="form-control" id="exampleFormControlSelect1">

                            <option value="1">1er Inter Trimestre</option>
                            <option value="2">1er       Trimestre</option>
                            <option value="3">2ème Inter Trimestre</option>
                            <option value="4">2ème       Trimestre</option>
                            <option value="5">3ème Inter Trimestre</option>
                            <option value="6">3ème       Trimestre</option>
        
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
