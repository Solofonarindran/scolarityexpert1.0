@extends('layout')

    @section('title')
        Frais Scolaire
    @endsection

    @section('style')
        <link rel="stylesheet" media="screen, print" href="/assets/css/page-invoice.css">
    @endsection

    @section('breadcrumbParent')
       Gérance Financière
    @endsection

    @section('breadcrumbChild')
        Frais Scolaire
    @endsection
    
    @section('badge')
        <sup class='badge badge-warning fw-800' style="letter-spacing:2px;font-size:12px">Matricule : 45</sup>
    @endsection

    @section('contents')

        <div class="container">
            <div data-size="A4">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="d-flex align-items-center mb-5">
                            <h2 class="keep-print-font fw-500 mb-0 text-warning flex-1 position-relative">
                                Collège Privé PETER PAN
                                <small class="text-muted mb-0 fs-xs">
                                    Tanakompania ,313 Ihosy
                                </small>
                                <!-- barcode demo only -->
                                <img id="barcode" alt="" class="position-absolute pos-top pos-right height-3 mt-1 hidden-md-down" src="data:image/png;base64,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">
                            </h2>
                        </div>
                        
                    </div>
                </div>

                <div class="row" style="height:70vh">
                    <div class="col-lg-4">
                        <!-- Kitchen sink example -->
                        <center id="panel-1" class="panel pb-3" style="height:100%">
                            <div class="img-profile mt-3 mb-3 overflow-hidden">
                                <img src="/assets/img/demo/avatars/avatar-a.png" class="rounded-pill" width="50%" alt=""
                                    srcset="" />
                            </div>
                            <h2 class="name text-dark" style="font-weight:800;text-transform:uppercase">{{$inscrit[0]->eleve->name}}</h2>
                            <h3 class="text-dark mb-4">{{$inscrit[0]->eleve->firstname}}</h3>
                            <div class="mb-3 mt-4">
                                <div class="btn-payement">
                                    <button class="btn btn-outline-success" data-toggle="modal" data-target=".example-modal-left-transparent">
                                        <i class="fal fa-plus"></i>
                                        <span>Payement</span>
                                    </button>
                                </div>
                            </div>
                            <div>
                                <div class="btn-payement">
                                    <a href="{{route('mouvement.detail.inscrit',['id'=>$inscrit[0]->id])}}" class="btn btn-light">
                                        <span>Operation detaillées</span>
                                    </a>
                                </div>
                            </div>
                        </center>
                    </div>
                    <div class="col-lg-8">
                        <div class="panel">
                            <div class="row mb-3 align-items-center">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="p-2 ml-4" style="font-weight:800">Classe de</div>
                                        <div class="p-2 ml-4">{{$inscrit[0]->classe->libelle}}</div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="p-2 ml-4" style="font-weight:800">Etat</div>
                                        <div class="p-2 ml-4">
                                            @if ($inscrit[0]->passant)
                                                Passant(e)
                                            @else
                                                Redoublant(e)
                                            @endif
                                            
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="p-2 ml-4" style="font-weight:800">Matricule</div>
                                        <div class="p-2 ml-4">{{$inscrit[0]->eleve->id}}</div>
                                    </div>
                                </div>
                                <div class="col-lg-6" style="border-left:1px solid #d1cfd1">
                                    <div class="d-flex align-items-center">
                                        <div class="col-lg-6">
                                            <h2 style="font-weight:800">Ecolage</h2>
                                            <h4 class="text-bold">{{$inscrit[0]->nb_moisPayé}} mois payé(s)</h4>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="js-easy-pie-chart color-success-500 position-relative mt-2 d-inline-flex align-items-center justify-content-center" style="" data-percent="{{number_format($inscrit[0]->nb_moisPayé/count($array)*100,2)}}" data-piesize="110" data-linewidth="10" data-scalelength="5">
                                                <div class="js-easy-pie-chart color-success-400 position-relative position-absolute pos-left pos-right pos-top pos-bottom d-flex align-items-center justify-content-center" data-percent="{{number_format($inscrit[0]->nb_moisPayé/count($array)*100,2)}}" data-piesize="70" data-linewidth="5" data-scalelength="1" data-scalecolor="#fff">
                                                    <div class="position-absolute pos-top pos-left pos-right pos-bottom d-flex align-items-center justify-content-center fw-800 fs-xl text-dark">{{number_format($inscrit[0]->nb_moisPayé/count($array)*100,2)}}%</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="row mb-3">
                                <div class="col-lg-6">
                                    <?php

                                        $len=count($array);

                                    ?>
                                    @for ($i=0;$i < 5;$i++)
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="p-2 ml-4 text-muted">{{$array[$i]}}</div>
                                            <div class="p-2">
                                                <a href="javascript:void(0);" 
                                                
                                                @if ($i < $inscrit[0]->nb_moisPayé)
                                                     class="btn btn-success btn-sm btn-icon rounded-circle">
                                                     <i class="fal fa-check"></i>
                                                @else
                                                    class="btn btn-secondary btn-sm btn-icon rounded-circle">
                                                   
                                                @endif 
                                                
                                                </a>
                                            </div> 
                                        </div>
                                    @endfor
                                </div>
                                <div class="col-lg-6">
                                    @for ($i=5;$i < $len;$i++)
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="p-2 ml-4 text-muted">{{$array[$i]}}</div>
                                            <div class="p-2 mr-4">
                                                <a href="javascript:void(0);" 
                                                
                                                @if ($i < $inscrit[0]->nb_moisPayé)
                                                     class="btn btn-success btn-sm btn-icon rounded-circle">
                                                     <i class="fal fa-check"></i>
                                                @else
                                                    class="btn btn-secondary btn-sm btn-icon rounded-circle">
                                                   
                                                @endif 
                                                
                                                </a>
                                            </div> 
                                        </div>
                                    @endfor
                                   
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="row mb-3">
                                <div class="col-lg-12 py-2">
                                    
                                    <div class="d-flex align-items-center justify-content-between mt-2">

                                        <a href="#"  class="btn btn-light d-flex position-relative ml-4"  
                                            @if(!$inscrit[0]->friandise_finish) data-toggle="modal" data-target=".example-modal-right-transparent" @endif style="border-bottom:5px solid #fdda91">Friandise @if($inscrit[0]->friandise_finish)<i class="fw-300 fa-2x fal fa-check text-success position-absolute" style="top:-5px;right:-5px"></i>@endif</a>
                                        <a href="#" class="btn btn-light d-flex position-relative @if(!$inscrit[0]->eleve->inne) mr-4 @endif" data-toggle="modal" 
                                            @if(!$inscrit[0]->tm_finish) data-target=".example-modal-right-transparent" @endif style="border-bottom:5px solid #fdda91">T M @if($inscrit[0]->tm_finish)<i class="fw-300 fa-2x fal fa-check text-success position-absolute" style="top:-5px;right:-5px"></i>@endif</a>
                                        
                                        @if($inscrit[0]->eleve->inne)
                                            <a href="" class="btn btn-light d-flex position-relative mr-4" data-toggle="modal"
                                            @if(!$inscrit[0]->participation_finish) data-target=".example-modal-right-transparent" @endif style="border-bottom:5px solid #fdda91">Particpation @if($inscrit[0]->participation_finish)<i class="fw-300 fa-2x fal fa-check text-success position-absolute" style="top:-5px;right:-5px"></i>@endif</a>
                                     
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  


         <!-- Modal left Transparent-->
         <div class="modal fade example-modal-left-transparent" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-left modal-sm modal-transparent">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title h4 text-white">Payement Ecolage</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">

                            <div class="card mb-3" style="box-shadow: 5px 4px 11px 5px #9a9996 ; border:1px solid #584475;">
                               <div class="card-body p-3">
                                   <h5>
                                       <a href="#" class="badge badge-warning">Primaire</a>
                                       <span class="badge badge-primary fw-n position-absolute pos-top pos-right mt-3 mr-3">P</span>
                                   </h5>
                                 
                               </div>
                               
                           </div>
                           <div class="card mb-5" style="box-shadow: 5px 4px 11px 5px #9a9996 ; border:1px solid #584475;">
                               
                               <div class="card-body p-3">
                               
                               		<form action="{{route('operation.post.fr',['id'=>$inscrit[0]->id])}}" method="post">
                                        @csrf
					                    <div class="form-group">
					                        <label class="form-label" for="libelle" style="font-weight:bold">Mois correspondant:</label>
					                        <input type="text" name="libelle" id="libelle" class="form-control"  value="{{$array[$inscrit[0]->nb_moisPayé]}}" readonly>
					                       
					                    </div>
					                    <div class="form-group">
					                        <label class="form-label" for="Parcours normal" style="font-weight:bold">Net un mois:</label>
					                        <input type="number" name="net" id="Parcours normal" class="form-control" value="{{$inscrit[0]->classe->cycle->frais_scolaire}}" readonly>
					                      
					                    </div>
					                    <div class="form-group">
					                        <label class="form-label" for="nombre_mois" style="font-weight:bold">Nombre de mois :</label>
					                        <input type="number" name="nb" id="nombre_mois" class="form-control nb_mois">
					                       
					                    </div>

					                    <div class="form-group">
					                        <label class="form-label" for="Parcours normal" style="font-weight:bold">Net à payer:</label>
					                        <input type="number" name="montant" id="Parcours normal" class="form-control" value="{{$inscrit[0]->classe->cycle->frais_scolaire}}" readonly>
					                      
					                    </div>
                                  
					                    <div class="d-inline-flex" style="width:100%;margin-left:40px">
                                            <button type="button" class="btn btn-sm btn-outline-secondary mr-3" data-dismiss="modal" style="margin-right:30px">Annuler</button>
                                            <button type="submit"  class="btn btn-sm btn-outline-primary mr-1">Effectuer</button> 
					                    		
					                    </div>
					                    
					                </form>
                               </div>   
                           </div>
                    </div>
                    <div class="modal-footer">
                        
                    </div>
                </div>
            </div>
        </div>

         <!-- Modal Right Transparent-->
         <div class="modal fade example-modal-right-transparent" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-right modal-sm modal-transparent">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title h4 text-white">Frais SColaire</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">

                            <div class="card mb-3" style="box-shadow: 5px 4px 11px 5px #9a9996 ; border:1px solid #584475;">
                               <div class="card-body p-3">
                                   <h5>
                                       <a href="#" class="badge badge-warning">Autres Opérations</a>
                                       <span class="badge badge-primary fw-n position-absolute pos-top pos-right mt-3 mr-3">P</span>
                                   </h5>
                                 
                               </div>
                               
                           </div>
                           <div class="card mb-5" style="box-shadow: 5px 4px 11px 5px #9a9996 ; border:1px solid #584475;">
                               
                               <div class="card-body p-3">
                               
                               		<form action="{{route('operation.divers',['id'=>$inscrit[0]->id,'cycle'=>$inscrit[0]->classe->cycle->id])}}" method="post">
                                        @csrf
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" @if($inscrit[0]->friandise_finish) disabled @endif id="customSwitch1" name="friandise">
                                            <label class="custom-control-label position-relative" for="customSwitch1">Friandise <sup class="mr-2" style="font-size:15px">{{$inscrit[0]->classe->cycle->friandise}}</sup>@if($inscrit[0]->friandise_finish)<i class="fw-300 fa-2x fal fa-check text-success position-absolute" style="top:-15px;right:-20px"></i>@endif</label>
                                        </div>
					                    <div class="custom-control custom-switch mt-4">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch2" @if($inscrit[0]->tm_finish) disabled @endif name="tm">
                                            <label class="custom-control-label position-relative" for="customSwitch2">TM <sup class="mr-2" style="font-size:15px">{{$inscrit[0]->classe->cycle->tm}}</sup> @if($inscrit[0]->tm_finish)<i class="fw-300 fa-2x fal fa-check text-success position-absolute" style="top:-15px;right:-20px"></i>@endif</label>
                                        </div>

                                        @if ($inscrit[0]->eleve->inne)
                                            <div class="custom-control custom-switch mt-4">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch3" @if($inscrit[0]->participation_finish) diseabled @endif name="participation">
                                                <label class="custom-control-label position-relative" for="customSwitch3">Participation <sup class="mr-2" style="font-size:15px">{{$inscrit[0]->classe->cycle->participation}}</sup> @if($inscrit[0]->participation_finish)<i class="fw-300 fa-2x fal fa-check text-success position-absolute" style="top:-15px;right:-20px"></i>@endif</label>
                                            </div>
                                        @endif
                                        
					                   
					                    <div class="d-inline-flex mt-4" style="width:100%;margin-left:40px">
                                            <button type="button" class="btn btn-sm btn-outline-secondary mr-3" data-dismiss="modal" style="margin-right:30px">Annuler</button>
                                            <button type="submit"  class="btn btn-sm btn-outline-primary mr-1">Effectuer</button> 
					                    		
					                    </div>
					                    
					                </form>
                               </div>   
                           </div>
                    </div>
                    <div class="modal-footer">
                        
                    </div>
                </div>
            </div>
        </div>

    @endsection

    @section('script')
        <script src="/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
        <script>
            $(document).ready(function(){
                $('#nombre_mois').keyup(function(){
                    let nb=$('input[name=nb]').val()
                    let net=$('input[name=net]').val()


                    $('input[name=montant]').val(net*nb)
                    
                })
            })
        </script>
    @endsection
