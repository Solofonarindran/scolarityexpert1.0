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
                        <span>{{$cycle[0]->droit}} <sup>Ar</sup></span>
                    </div>
                    <div class="price-section">
                        <h4><strong>Ecolage</strong></h4>
                        <span>{{$cycle[0]->frais_scolaire}} <sup>Ar</sup></span>
                    </div>

                </div>
                <?php
                    session(['total'=>$cycle[0]->droit + $cycle[0]->frais_scolaire]);
                ?>
                <div class="user-total-pay">
                    <span>TOTAL: <strong>{{$cycle[0]->droit + $cycle[0]->frais_scolaire}} Ar</strong></span>
                </div>
                <form action="{{route('classechoisie')}}" method="post" class="form-select">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Veuillez choisir une classe: <span>08 places
                                disponnibles</span></label>
                        <select name="classe" class="form-control" id="selectClasseDispo">
                            @foreach ($classes as $classe)
                               <option value="{{$classe->id}}">{{$classe->libelle}}</option>
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

  