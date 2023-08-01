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

                
                <form action="#" class="form-select">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Veuillez choisir une classe:</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>4eme B</option>
                            <option>2nd</option>
                            <option>1ere D</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Veuillez choisir l'examen: </label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>1er Inter Trimestre</option>
                            <option>1er Trimestre</option>
                            <option>2 trimestre</option>
                        </select>
                    </div>

                    <div class="confirmation-button text-center">
                        <button class="btn  btn-outline-danger">Annuler</button>
                        <button type="submit" class="btn btn-primary ml-4">Confirmer</button>

                    </div>
                </form>
            </div>
            
        </div> 
       

    @endsection
