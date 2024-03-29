<!doctype html>
<html lang="en" dir="ltr">

    <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <!-- Meta data -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>

        <meta content="Solic – Bootstrap Responsive Modern Simple Dashboard Clean HTML Premium Admin Template" name="description">

        <!--favicon2 -->
        <link rel="icon" href="{{ asset('assets\images\vector.png') }}" type="image/x-icon"/>

        <link rel="shortcut icon" href="{{ asset('assets\images\vector.png') }}" type="image/x-icon"/>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        <script src="https://kit.fontawesome.com/6987e7934c.js" crossorigin="anonymous"></script>
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <style type="text/css">


            .table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th
            {
                background-color: #f9f9f9;
            }

            
        </style>


        <!-- TITLE -->
        <title> JSS </title>


        <!-- DASHBOARD CSS -->

        <link href="{{ asset('solic/assets/css/style.css') }}" rel="stylesheet"/>
        <link href="{{ asset('solic/assets/css/style-modes.css') }}" rel="stylesheet"/>

        <!-- HORIZONTAL-MENU CSS -->
        <link href="{{ asset('solic/assets/css/horizontal-menu.css') }}" rel="stylesheet">

        <!--C3.JS CHARTS PLUGIN -->
        <link href="{{ asset('solic/assets/plugins/charts-c3/c3-chart.css') }}" rel="stylesheet"/>

        <!-- TABS CSS -->
        <link href="{{ asset('solic/assets/plugins/tabs/style-2.css') }}" rel="stylesheet" type="text/css">

        <!-- PERFECT SCROLL BAR CSS-->
        <link href="{{ asset('solic/assets/plugins/pscrollbar/perfect-scrollbar.css') }}" rel="stylesheet" />

        <!-- NOTIFICATION CSS -->
        <link href="{{ asset('solic/assets/plugins/notify/css/jquery.growl.css') }}" rel="stylesheet"/>

        <!--- FONT-ICONS CSS -->
        <link href="{{ asset('solic/assets/css/icons.css') }}" rel="stylesheet"/>

        <!-- Skin css-->
        <link href="{{ asset('solic/assets/skins/skins-modes/color2.css') }}"  id="theme" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset('solic/assets/plugins/multipleselect/multiple-select.css') }}">

        <link href="{{ asset('solic/assets/plugins/sweet-alert/sweetalert.css') }}" rel="stylesheet" />
        
        @yield('styles')
        
        <style>
            .barre{
                max-width: 1900px !important;
            }
        </style>
    </head>

    <body class="default-header">


        <div id="global-loader">
            <img src="{{ asset('solic/assets/images/svgs/loader.gif') }}" class="loader-img dent-loader" alt="Loader">
        </div>


        <div class="page">
            <div class="page-main">
                <!-- HEADER -->
                <div class="header hor-top-header">
                    <div class="container-fluid">
                        <div class="d-flex">
                            <a id="horizontal-navtoggle" class="animated-arrow hor-toggle"><span></span></a>

                            <a class="header-brand" href="/home">
                                <img src="{{ asset('assets\images\vector.png') }}" class="header-brand-img desktop-logo" alt="JSS logo">
                                <img src="{{ asset('assets\images\vector.png') }}" class="header-brand-img mobile-view-logo" alt="JSS logo">
                            </a><!-- LOGO -->

                            <!-- <a class="header-brand header-brand2" href="/home">
                                <img src="{{ asset('assets\images\vector.png') }}" class="header-brand-img desktop-logo" alt="Solic logo">
                                <img src="{{ asset('assets\images\vector.png') }}" class="header-brand-img mobile-view-logo" alt="Solic logo">
                            </a>LOGO -->
                            <div class="d-flex order-lg-2 ml-auto header-right-icons header-search-icon">
                                <div class="dropdown d-md-flex">
                                    <a class="nav-link icon full-screen-link nav-link-bg" id="fullscreen-button">
                                        <i class="fe fe-maximize-2"></i>
                                    </a>
                                </div><!-- FULL-SCREEN -->

                                <div class="dropdown d-md-flex header-settings">
                                    <a href="#" class="nav-link " data-toggle="dropdown">
                                        <span><img src="{{ asset('assets\images\vector.png') }}" alt="profile-user" class="avatar brround cover-image mb-0 ml-0"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <div class="drop-heading  text-center border-bottom pb-3">
                                            <h5 class="text-dark mb-1">MY JSS</h5>
                                            <small class="text-muted">Logiciel De Gestion De Votre Club</small>
                                        </div>

                                        <a class="dropdown-item" onclick="event.preventDefault();

                                            document.getElementById('logout-form').submit();" href="{{ url('/logout') }}"><i class="mdi mdi-logout-variant mr-2"></i> <span>Logout</span>

                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="Post" style="display: none;">

                                            {{ csrf_field() }}

                                        </form>

                                        {{--  --}}
                                    </div>
                                </div>


                                <!-- SIDE-MENU -->
                                {{--  --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- HEADER END -->

                <!-- HORIZONTAL-MENU -->
                <div class="sticky">
                    <div class="horizontal-main hor-menu clearfix">
                        <div class="horizontal-mainwrapper container barre clearfix">
                            <nav class="horizontalMenu clearfix">
                                <ul class="horizontalMenu-list">
                                            <li aria-haspopup="true">


                                                <a href="/admin/index" style="cursor: pointer;" class="sub-icon">
                                                <span style="color: #003366 ;" >
                                                <i class="fas fa-user"  style="color:#15c2ce ;"></i>
                                                Admin  
                                               </span>
                                                

                                                </a>
                                            </li>
                                            
                                           <li aria-haspopup="true">

                                               <a style="cursor: pointer;" class="sub-icon">
                                                <span style="color: #003366 ;"  >
                                                   <i class="fas fa-dumbbell" style="color: #15c2ce ;"></i>
                                                Sport</span>
                                                 
                                                
                                                       
                                                <i class="fa fa-angle-down horizontal-icon"></i>
                                            </a>

                                            <ul class="sub-menu">
                                                <li aria-haspopup="true">
                                                    <a style="color: #003366 ;" href="/admin/sports">Sports</a>
                                                </li>

                                                <li aria-haspopup="true">
                                                    <a style="color: #003366 ;" href="/admin/categories">Catégories</a>
                                                </li>



                                                <li aria-haspopup="true">
                                                    <a style="color: #003366 ;" href="/admin/groupes">Groupes</a>
                                                </li>
                                            </ul>
                                        </li>


                                        <li aria-haspopup="true">

                                            <a style="cursor: pointer;" class="sub-icon">
                                            <span style="color: #003366 ;" >
						                    <i class="fas fa-tasks" style="color:#15c2ce;" aria-hidden="true"></i>			

					                        Gestion</span>
                                                <i class="fa fa-angle-down horizontal-icon"></i>
                                            </a>

                                            <ul class="sub-menu">
                                                <li aria-haspopup="true">
                                                    <a style="color: #003366 ;" href="/admin/adherants">Adherants</a>


                                                </li>

                                                <li aria-haspopup="true">
                                                    <a style="color: #003366 ;"  href="/admin/coaches">Coaches</a>
                                                </li>

                                                <li aria-haspopup="true">
                                                    <a style="color: #003366 ;" href="/admin/gestionnaires">Gestionnaires</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li aria-haspopup="true">
                                        
 
                                            <a style="color: #003366 ;" href="/admin/salles" style="cursor: pointer;" class="sub-icon">
                                            <span>
                                            <i  class="fa-solid fa-door-open" style="color:#15c2ce; "></i>
                                            Salles
                                            </span>   
                                                
                                            </a>

                                      </li>
                                      <li aria-haspopup="true">
                                        
 
                                        <a style="color: #003366 ;" href="/admin/seances" style="cursor: pointer;" class="sub-icon">
                                        <span>
                                        <i  class="fa-solid fa-door-open" style="color:#15c2ce; "></i>
                                        Seance
                                        </span>   
                                            
                                        </a>

                                  </li>
                                        <li aria-haspopup="true">

                                            <a style="color: #003366 ;" href="/admin/evenements" style="cursor: pointer;" class="sub-icon">
                                            <i class="fa fa-medal "style="color:#15c2ce; " ></i>Evenements
                                               
                                            </a>


                                        </li>


                                        <li aria-haspopup="true">

                                            <a style="color: #003366 ;" style="cursor: pointer;" class="sub-icon">
                                            <i class="fa fa-calendar-check-o" style="color:#15c2ce;"></i>Planning
                                                
                                            </a>


                                        </li>
                                        <li aria-haspopup="true">

                                            <a style="color: #003366 ;" href="/admin/abonnements" style="cursor: pointer;" class="sub-icon">
                                                <i class="fa-solid fa-money-check" style="color:#15c2ce;"></i>Abonnement
                                                
                                            </a>


                                        </li>
                                        <li aria-haspopup="true">

                                           <a style="cursor: pointer;" class="sub-icon">
                                                <span style="color: #003366 ;"    >
                                                   <i class="fa fa-dollar" style="color: #15c2ce ;"></i>
                                                   Comptabilité</span>
                                                 
                                                
                                                       
                                                <i class="fa fa-angle-down horizontal-icon"></i>
                                            </a>

                                            <ul class="sub-menu">



                                                <li aria-haspopup="true">
                                                    <a style="color: #003366 ;" href="/admin/factures">Facture</a>
                                                </li>



                                                <li aria-haspopup="true">
                                                    <a style="color: #003366 ;" href="/commercial" >Stat</a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li aria-haspopup="true">

                                            <a style="cursor: pointer;" class="sub-icon">
                                                    <span  style="color: #003366 ;">
                                                    <i class="fa fa-question-circle" style="color: #15c2ce ;"></i>
                                                    Aide</span>
                                                
                                            </a>


                                        </li>



                                    {{--  --}}
                                </ul>
                            </nav>
                            <!-- NAV END -->

                        </div>
                    </div>
                </div>
                <!-- HORIZONTAL-MENU END -->

                @if ((session()->has('notification.message')))

                    <div id="nnotif" class="alert alert-{{ session()->get('notification.type') }}" style="text-align: center;">

                        {{ session()->get('notification.message') }}
                    </div>

                  {{--  --}}
                @endif


                <!-- CONTAINER -->
                <div class="container-fluid content-area relative">


                    @yield('content')

                </div>
                <!-- CONTAINER END -->
            </div>


            <!-- FOOTER -->
            <footer class="footer">
                <div class="container">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-md-12 col-sm-12 text-center">
                            Copyright © 2024 <a href="#">My JSS</a> Designed by <a href="#">GIRLS</a> All rights reserved.
                        </div>
                    </div>
                </div>
            </footer>
            <!-- FOOTER END -->
        </div>




        <!-- BACK-TO-TOP -->
        <a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

        <!-- JQUERY SCRIPTS -->
        <script src="{{ asset('solic/assets/js/vendors/jquery-3.2.1.min.js') }}"></script>

        <!-- BOOTSTRAP SCRIPTS -->
        <script src="{{ asset('solic/assets/js/vendors/bootstrap.bundle.min.js') }}"></script>

        <!-- SPARKLINE -->
        <script src="{{ asset('solic/assets/js/vendors/jquery.sparkline.min.js') }}"></script>

{{--
        <script src="{{ asset('solic/assets/js/vendors/circle-progress.min.js') }}"></script>
 --}}
        <!-- RATING STAR -->
        <script src="{{ asset('solic/assets/plugins/rating/jquery.rating-stars.js') }}"></script>

        <!-- SELECT2 JS -->
        <script src="{{ asset('solic/assets/plugins/select2/select2.full.min.js') }}"></script>
        <script src="{{ asset('solic/assets/js/select2.js') }}"></script>


        <!-- PIETY CHART -->
        <script src="{{ asset('solic/assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
        <script src="{{ asset('solic/assets/plugins/peitychart/peitychart.init.js') }}"></script>

        <!-- HORIZONTAL-MENU -->
        <script src="{{ asset('solic/assets/plugins/horizontal-menu/horizontal-menu.js') }}"></script>

        <!-- PERFECT SCROLL BAR JS-->

        <!-- SIDEBAR JS -->
        <script src="{{ asset('solic/assets/plugins/sidebar/sidebar.js') }}"></script>

        <!-- APEX-CHARTS JS -->
        <script src="{{ asset('solic/assets/plugins/apexcharts/apexcharts.js') }}"></script>
        <script src="{{ asset('solic/assets/plugins/apexcharts/irregular-data-series.js') }}"></script>

        <!-- INDEX-SCRIPTS  -->
        <script src="{{ asset('solic/assets/js/index.js') }}"></script>

        <!-- STICKY JS -->
        <script src="{{ asset('solic/assets/js/stiky.js') }}"></script>



        <!-- C3.JS CHART PLUGIN -->
        <script src="{{ asset('solic/assets/plugins/charts-c3/d3.v5.min.js') }}"></script>
        <script src="{{ asset('solic/assets/plugins/charts-c3/c3-chart.js') }}"></script>

        <!-- INPUT MASK PLUGIN-->
        <script src="{{ asset('solic/assets/plugins/input-mask/jquery.mask.min.js') }}"></script>

        <!-- DATA TABLE -->
        <script src="{{ asset('solic/assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('solic/assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('solic/assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('solic/assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('solic/assets/plugins/datatable/js/jszip.min.js') }}"></script>
        <script src="{{ asset('solic/assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
        <script src="{{ asset('solic/assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
        <script src="{{ asset('solic/assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('solic/assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('solic/assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('solic/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('solic/assets/plugins/datatable/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('solic/assets/plugins/datatable/datatable.js') }}"></script>

        <!-- SELECT2 JS -->
        <script src="{{ asset('solic/assets/plugins/select2/select2.full.min.js') }}"></script>

        <!-- STICKY JS -->

        <!-- SIDEBAR JS -->
        <script src="{{ asset('solic/assets/plugins/sidebar/sidebar.js') }}"></script>

        <!-- CUSTOM JS-->
        <script src="{{ asset('solic/assets/js/custom.js') }}"></script>

        <script src="{{ asset('solic/js/printThis.js') }}"></script>

        <!-- SWEET-ALERT PLUGIN -->
        <script src="{{ asset('solic/assets/plugins/sweet-alert/sweetalert.min.js') }}"></script>
        <script src="{{ asset('solic/assets/js/sweet-alert.js') }}"></script>

        <!-- NOTIFICATIONS JS -->
        <script src="{{ asset('solic/assets/plugins/notify/js/rainbow.js') }}"></script>
        <script src="{{ asset('solic/assets/plugins/notify/js/sample.js') }}"></script>
        <script src="{{ asset('solic/assets/plugins/notify/js/jquery.growl.js') }}"></script>

        <script src="{{ asset('solic/assets/plugins/multipleselect/multiple-select.js') }}"></script>
        <script src="{{ asset('solic/assets/plugins/multipleselect/multi-select.js') }}"></script>

        <!-- ECHART JS -->
        <script src="{{ asset('solic/assets/js/echarts.js') }}"></script>

        <!-- ECHART PLUGIN -->
        <script src="{{ asset('solic/assets/plugins/echarts/echarts.js') }}"></script>
        
        <script src="{{ asset('solic/js/dynamic-form.js') }}"></script>




        <!--  -->
    </body>
</html>
