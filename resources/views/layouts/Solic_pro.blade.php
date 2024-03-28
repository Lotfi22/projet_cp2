<!doctype html>
<html lang="en" dir="ltr" data-layout='horizontal' data-hor-style='hor-click' data-logo='centerlogo' 
data-header-style = "color">
	<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="" name="description">
		<meta content="" name="author">
		<meta name="keywords" content="" >

		<!--favicon -->
		<link rel="icon" href="{{ asset('solic_pro/assets/images/brand/vector.png') }}" type="image/x-icon" >

		<!-- TITLE -->
		<title>MY – JSS</title>

		<!-- BOOTSTRAP CSS -->
		<link id="style" href="{{ asset('solic_pro/assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

		<!-- STYLES CSS -->
		<link href="{{ asset('solic_pro/assets/css/style.css') }}" rel="stylesheet" >

		<!-- PLUGIN CSS -->
		<link href="{{ asset('solic_pro/assets/css/plugin.css') }}" rel="stylesheet">

		<!--- FONT-ICONS CSS -->
		<link href="{{ asset('solic_pro/assets/css/icons.css') }}" rel="stylesheet" >

		<!-- Switcher css -->
		<link href="{{ asset('solic_pro/assets/switcher/css/switcher.css')}}" rel="stylesheet" id="switcher-css" type="text/css" media="all" >
		<link href="{{asset('solic_pro/assets/switcher/demo.css')}}" rel="stylesheet" >

		<style>
			
			.modal {
			     background: rgba(255, 255, 255, 0.3); 
			}
			.modal-backdrop {
			     display: none;
			};

			
		</style>

		<!-- JQUERY SCRIPTS -->
		<script src="{{  asset('solic_pro/assets/js/vendors/jquery.min.js')}}"></script>


	</head>

	<body class="sidebar-mini2 app sidebar-mini">

	    <!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="{{ asset('solic_pro/assets/images/svgs/loader.svg') }}" class="loader-img" alt="Loader">
		</div>

		<!-- START PAGE -->
		<div class="page">
			<div class="page-main">
				<div>
					<!-- START HEADER -->
					<div class="app-header sticky">
						<div class="main-container container-fluid d-flex ">
							<div class="d-flex header-left">
								<div class="responsive-logo">
									
								</div>
								<div class="header-nav-link">
									<a href="javascript:void(0);" data-bs-toggle="sidebar" class="nav-link icon toggle app-sidebar__toggle">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M4 11h12v2H4zm0-5h16v2H4zm0 12h7.235v-2H4z"></path></svg>
									</a>
								</div>

							</div>
							<div class="d-flex header-right ms-auto">
								<div class="header-nav-link">
									<a href="javascript:void(0);" class="nav-link icon d-lg-none" role="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0-6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 12c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg>
									</a>
								</div>
								<div class="responsive-navbar align-items-stretch navbar-expand-lg navbar-dark p-0 mb-0">
									<div class="collapse align-items-stretch navbar-collapse" id="navbarSupportedContent-4">
										<ul class="list-unstyled nav">

											

											<li class="header-nav-link header-fullscreen">
												<a href="javascript:void(0);" class="nav-link icon" id="fullscreen-button">
													<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10 4H8v4H4v2h6zM8 20h2v-6H4v2h4zm12-6h-6v6h2v-4h4zm0-6h-4V4h-2v6h6z"></path></svg>
												</a>
											</li><!-- Fullscreen -->

											

											


											<li class="header-nav-link dropdown">
												<a href="javascript:void(0);" class="nav-link icon" data-bs-toggle="dropdown">
													<img class="avatar rounded-circle" src="{{ asset('solic_pro/assets/images/brand/vector.png') }}" alt="image">
												</a>
												<ul class="dropdown-menu w-250 pt-0 dropdown-menu-arrow dropdown-menu-right">

													<li>
														<a href="login.html" class="dropdown-item d-flex align-items-center">

					                                        <a class="dropdown-item" onclick="event.preventDefault();

					                                            document.getElementById('logout-form').submit();" href="{{ url('/admin') }}"><i class="ri-logout-circle-r-line fs-18 me-2 text-primary"></i> <span>Logout</span>

					                                        </a>

					                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">

					                                            {{ csrf_field() }}

					                                        </form>


														</a>
													</li>
												</ul>
											</li>

										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END HEADER -->

					<!-- START LEFT-SIDEBAR-MENU -->
					@include('layouts.includes.side_bar')
					<!-- END LEFT-SIDEBAR-MENU -->
				</div>

				<!-- START APP-CONTENT -->
				<div class="main-content app-content">

					<!-- START PAGE-HEADER -->
					<div class="page-header main-container container-fluid px-5">
						<h4 class="page-title"></h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#"></a></li>
							<li class="breadcrumb-item active" aria-current="page"></li>
						</ol>
					</div>
					<!-- END PAGE-HEADER -->

					<!-- START MAIN-CONTAINER -->
					<div class="main-container container-fluid">

						<!-- START ROW-1 -->

						@yield('content')

						<!-- END ROW-1 -->

					</div>
					<!-- END MAIN-CONTAINER -->
				</div>
				<!-- END APP-CONTENT -->
			</div>


			<!-- START FOOTER -->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 text-center">
							Copyright © 2024 <a href="#">MY JSS</a>. Designed by <a href="#">THE GIRLS</a> All rights reserved.
						</div>
					</div>
				</div>
			</footer>
			<!-- END FOOTER -->

		</div>
		<!-- END PAGE -->

		<!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-level-up"></i></a>

		<!-- BOOTSTRAP SCRIPTS -->
		<script src="{{  asset('solic_pro/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
    	<script src="{{  asset('solic_pro/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

		<!-- STICKY JS-->
		<script src="{{  asset('solic_pro/assets/js/sticky.js')}}"></script>

        <!-- SELECT2 JS -->
		<script src="{{  asset('solic_pro/assets/plugins/select2/select2.full.min.js')}}"></script>
		<script src="{{  asset('solic_pro/assets/js/select2.js')}}"></script>

		<!-- SIDEMENU JS-->
		<script src="{{  asset('solic_pro/assets/plugins/sidemenu/sidemenu.js')}}"></script>

		<!-- PERFECT SCROLL BAR JS-->
		<script src="{{  asset('solic_pro/assets/plugins/pscrollbar/perfect-scrollbar.js')}}"></script>
		<script src="{{  asset('solic_pro/assets/plugins/pscrollbar/pscroll-sidemenu.js')}}"></script>

        <!-- SETTINGS JS -->
		<script src="{{  asset('solic_pro/assets/js/settings.js')}}"></script>

		<!-- SIDEBAR JS -->
		<script src="{{  asset('solic_pro/assets/plugins/sidebar/sidebar.js')}}"></script>

		<!-- CUSTOM-SWICTHER JS -->
		<script src="{{  asset('solic_pro/assets/js/custom-switcher.js')}}"></script>

		<!-- SWITCHER JS -->
		<script src="{{  asset('solic_pro/assets/switcher/js/switcher.js')}}"></script>

		<!-- CUSTOM JS-->
		<script src="{{  asset('solic_pro/assets/js/custom.js')}}"></script>

	</body>
</html>