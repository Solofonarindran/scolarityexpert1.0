@extends('layout')

    @section('title')
        Inscription
    @endsection

    @section('style')
        <link rel="stylesheet" href="/assets/css/custom-css/gestion-inscription-etape-2.css">
    @endsection

    @section('breadcrumbParent')
       Gérance Inscription
    @endsection

    @section('breadcrumbChild')
        Inscription
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
                <div class="scolarity-price">
                    <div class="price-section">
                        <h4><strong>Droit</strong></h4>
                        <span>250.000 <sup>Ar</sup></span>
                    </div>
                    <div class="price-section">
                        <h4><strong>Ecolage</strong></h4>
                        <span>20.000 <sup>Ar</sup></span>
                    </div>

                </div>
                <div class="user-total-pay">
                    <span>TOTAL: <strong>255.000Ar</strong></span>
                </div>
                <form action="#" class="form-select">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Veuillez choisir une classe: <span>08 places
                                disponnibles</span></label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>4eme B</option>
                            <option>2nd</option>
                            <option>1ere D</option>
                        </select>
                    </div>
                    <div class="confirmation-button text-center">
                        <button class="btn  btn-outline-danger">Annuler</button>
                        <button class="btn btn-primary ml-4">Confirmer</button>

                    </div>
                </form>
            </div>
            
        </div> 
       

    @endsection
