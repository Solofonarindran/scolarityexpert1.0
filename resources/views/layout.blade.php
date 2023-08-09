<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="description" content="ColReorder" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui" />
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- base css -->
       @include('partials.assets.baseStyle')
    <!-- endbase  -->

    <!-- style personnalisé pour chaque page-->
       @yield('style') 
    <!-- endstyle -->
   
</head>
<!-- DOC: script to save and load page settings -->
<body class="mod-bg-1">
    @include('partials.assets.headScript')

    <!-- BEGIN Page Wrapper -->
    <div class="page-wrapper">
        <div class="page-inner">

            <!-- left sidenav -->
                @include('partials.sidenav')
            <!-- END sidenav -->

            <div class="page-content-wrapper">
                <!-- BEGIN Page Header -->
                    @include('partials.header')
                <!-- END HEader --> 

                <!-- Contenu principal  -->
                    <main id="js-page-content" role="main" class="page-content">
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Scolarity Expert</a></li>
                            <li class="breadcrumb-item">@yield('breadcrumbParent')</li>
                            <li class="breadcrumb-item active">@yield('breadcrumbChild')</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-window'></i> @yield('breadcrumbChild') @yield('badge')
                               
                            </h1>
                        </div>

                        @yield('contents')

                    </main>
                <!-- End main --->

                <!-- this overlay is activated only when mobile menu is triggered -->
                     <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>
                <!-- END Page Content -->

                <!-- Footer page -->
                    @include('partials.footer')

                <!-- End footer -->

            </div>

        </div>
    </div>


    <!-- nav menu  --> 
     
        @include('partials.navmenu')
     
    <!-- END nav menu -->
        @include('partials.settingPage')
    <!-- setting page -->


    <!-- Base Script-->
        @include('partials.assets.baseScript')
    <!-- End Base Script -->
    
    <!--Script personnalisé -->
        @yield('script')

</body>