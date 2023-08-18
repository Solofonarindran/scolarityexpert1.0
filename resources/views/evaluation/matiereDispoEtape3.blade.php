
@extends('layout')

    @section('title')
        Inscription
    @endsection

    @section('style')
        
    @endsection

    @section('breadcrumbParent')
        Evaluation
    @endsection

    @section('breadcrumbChild')
        Gestion de note
    @endsection

    @section('badge')
        <sup class='badge badge-warning fw-800' style="letter-spacing:2px;font-size:12px">Matière Dispo</sup>
    @endsection

    @section('contents')

            <div id="panel-1" class="panel" style="margin-left:30%; margin-right:30%;">
                <div class="panel-hdr">
                    <h2>
                        Matière <span class="fw-300 badge badge-warning"><i>Disponible</i></span>
                    </h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="panel-tag d-flex justify-content-center" style="font-weight:800;text-transform:capitalize;letter-spacing:1px">
                            Veuillez selectionner la matière
                        </div>
                    
                        <div class="frame-wrap demo">
                            <div class="demo">
                              <form action="{{route('postMatiereDispo')}}" method="post">
                                @csrf
                                <select name="charger_id" class="form-control" id="exampleFormControlSelect1">
                                    @foreach($chargers as $charger)
                                        <option value="{{$charger->id}}">{{$charger->matiere->libelle}}</option>
                                    @endforeach
                                </select>
            
                                <div class="d-flex justify-content-center mt-4">
                                    <button type="submit" class="btn btn-sm btn-outline-primary" style="letter-spacing:2px">Confimer</button>
                                </div>

                              </form>
                                      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @endsection