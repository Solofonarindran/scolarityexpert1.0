@extends('layout')

    @section('title')
        Réinscription
    @endsection

    @section('style')
        <link rel="stylesheet" href="/assets/css/custom-css/gestion-reinscription-form-etudiant.css">
    @endsection

    @section('breadcrumbParent')
       Gérance Inscription 
    @endsection

    @section('breadcrumbChild')
        Réinscription
    @endsection

    @section('badge')
        <sup class='badge badge-warning fw-800' style="letter-spacing:2px;font-size:12px">Informations</sup>
    @endsection

    @section('contents')

        <div class="gestion-reinscription-form-etudiant" style="display:flex;justify-content:center">  

            <div style="width:50%">

                <div class="etudiant-info-perso shadow">
                    <h3 class="person-item-details">
                        <i class="fal fa-user"></i>
                        INFROMATIONS PERSONNELLES
                    </h3>
                    <div class="person-items profile-student-pricture">
                        <img src="/assets/img/student-profile/test-profile.jpg" alt="">
                    </div>
                    <div class="person-items ">
                        <span class="item-person">
                            <span class="item-tite">IDENTIFIANT:</span>
                            G-456
                        </span>
                        <span class="item-person">
                            <span class="item-tite">NOM:</span>
                            RABEHEVITRA
                        </span>
                        <span class="item-person">
                            <span class="item-tite">PRENOMS:</span>
                            Fitiavana Nalahatra
                        </span>
                        <span class="item-person">
                            <span class="item-tite">CLASSE PRECEDENT: </span>
                            4<sup>ème</sup> A
                        </span>
                        <div class="indicator ">
                            <span class="admise">ADMISE</span>
                        </div>
                    </div>
                </div>
                <div class="etudiant-info-perso shadow etudiant-discipline">
                    <h3 class="person-item-details">
                        <i class="fal fa-paste"></i>
                        INFORMATIONS DISCIPLINAIRE
                    </h3>
                    <ul style="list-style-type: none;">
                        <li><i class="fal fa-chevron-right mr-3"></i> 1<sup>ère</sup> avertissement du 06 Juin 2011
                        </li>
                        <li><i class="fal fa-chevron-right mr-3"></i> Convocation des parents pour baggare</li>
                        <li><i class="fal fa-chevron-right mr-3"></i> 2<sup>ème</sup> avertissement pour vole</li>

                    </ul>

                </div>
                <div class="etudiant-info-perso  shadow etudiant-frais">
                    <h3 class="person-item-details">
                        <i class="fal fa-money-bill"></i>
                        FRAIS DE SCOLARITE
                    </h3>
                    <span>ECOLAGE: 15.000Ar / mois </span>
                    <span>DROIT: 150.000Ar </span>
                </div>
                <div class="action-button m-4" style="display:flex;justify-content:center">
                    
                    <button class="btn btn-outline-danger text-bold mr-2">Annuler</button>
                    <button class="btn btn-primary text-bold ml-2">Reinscrire</button>
                </div>
            </div>

        </div>
            
       

    @endsection
