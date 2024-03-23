<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="Solic – Bootstrap5 Responsive Modern Simple Dashboard Clean HTML Premium Admin Template" name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		<meta name="keywords" content="admin dashboard template, admin panel template, bootstrap admin template, bootstrap dashboard, bootstrap admin, bootstrap admin panel, admin template, bootstrap admin template, dashboard template, bootstrap admin template, premium admin templates, html admin template, ecommerce dashboard, admin panel template, bootstrap admin theme, bootstrap admin panel" >

		<!--favicon -->
		<link rel="icon" href="{{ asset('/solic_pro/assets/images/brand/favicon.ico') }}" type="image/x-icon" >

		<!-- TITLE -->
		<title>Solic Pro</title>

		<!-- BOOTSTRAP CSS -->
		<link id="style" href="{{ asset('/solic_pro/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

		<!-- STYLES CSS -->
		<link href="{{  asset('/solic_pro/assets/css/style.css')}}" rel="stylesheet" >

		<!-- PLUGIN CSS -->
		<link href="{{  asset('/solic_pro/assets/css/plugin.css')}}" rel="stylesheet">

		<!--- FONT-ICONS CSS -->
		<link href="{{  asset('/solic_pro/assets/css/icons.css')}}" rel="stylesheet" >

		<link href="{{  asset('/solic_pro/assets/switcher/demo.css')}}" rel="stylesheet" >
		<!-- Switcher css -->
		<link href="{{  asset('/solic_pro/assets/switcher/css/switcher.css')}}" rel="stylesheet" id="switcher-css" type="text/css" media="all" >

		<!-- JQUERY SCRIPTS -->
		<script src="{{ asset('solic_pro/assets/js/vendors/jquery.min.js')}}"></script>		

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
									<a class="main-logo" href="index.html">
										<img src="{{ asset('solic_pro/assets/images/brand/light-logo.png') }}" class="desktop-logo desktop-logo-dark" alt="soliclogo">
										<img src="{{ asset('solic_pro/assets/images/brand/dark-logo.png') }}" class="desktop-logo" alt="soliclogo">
									</a>
								</div>
								<div class="header-nav-link">
									<a href="javascript:void(0);" data-bs-toggle="sidebar" class="nav-link icon toggle app-sidebar__toggle">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M4 11h12v2H4zm0-5h16v2H4zm0 12h7.235v-2H4z"></path></svg>
									</a>
								</div>
							</div>

							<div class="d-flex header-right ms-auto">



								<div class="responsive-navbar align-items-stretch navbar-expand-lg navbar-dark p-0 mb-0">
									<div class="collapse align-items-stretch navbar-collapse" id="navbarSupportedContent-4">
										<ul class="list-unstyled nav">


											<li class="header-nav-link header-fullscreen">
												<a href="javascript:void(0);" class="nav-link icon" id="fullscreen-button">
													<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10 4H8v4H4v2h6zM8 20h2v-6H4v2h4zm12-6h-6v6h2v-4h4zm0-6h-4V4h-2v6h6z"></path></svg>
												</a>
											</li><!-- Fullscreen -->

											<li class="header-nav-link">
												<a href="javascript:void(0);" class="nav-link icon layout-setting light-layout">
													<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.742 13.045a8.088 8.088 0 0 1-2.077.271c-2.135 0-4.14-.83-5.646-2.336a8.025 8.025 0 0 1-2.064-7.723A1 1 0 0 0 9.73 2.034a10.014 10.014 0 0 0-4.489 2.582c-3.898 3.898-3.898 10.243 0 14.143a9.937 9.937 0 0 0 7.072 2.93 9.93 9.93 0 0 0 7.07-2.929 10.007 10.007 0 0 0 2.583-4.491 1.001 1.001 0 0 0-1.224-1.224zm-2.772 4.301a7.947 7.947 0 0 1-5.656 2.343 7.953 7.953 0 0 1-5.658-2.344c-3.118-3.119-3.118-8.195 0-11.314a7.923 7.923 0 0 1 2.06-1.483 10.027 10.027 0 0 0 2.89 7.848 9.972 9.972 0 0 0 7.848 2.891 8.036 8.036 0 0 1-1.484 2.059z"></path></svg>
												</a>
												<a href="javascript:void(0);" class="nav-link icon layout-setting dark-layout">
													<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M6.993 12c0 2.761 2.246 5.007 5.007 5.007s5.007-2.246 5.007-5.007S14.761 6.993 12 6.993 6.993 9.239 6.993 12zM12 8.993c1.658 0 3.007 1.349 3.007 3.007S13.658 15.007 12 15.007 8.993 13.658 8.993 12 10.342 8.993 12 8.993zM10.998 19h2v3h-2zm0-17h2v3h-2zm-9 9h3v2h-3zm17 0h3v2h-3zM4.219 18.363l2.12-2.122 1.415 1.414-2.12 2.122zM16.24 6.344l2.122-2.122 1.414 1.414-2.122 2.122zM6.342 7.759 4.22 5.637l1.415-1.414 2.12 2.122zm13.434 10.605-1.414 1.414-2.122-2.122 1.414-1.414z"></path></svg>
												</a>
											</li><!-- theme-layout -->

											<li class="header-nav-link dropdown">
												<a href="javascript:void(0);" class="nav-link icon text-center" data-bs-toggle="dropdown">
													<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707A.996.996 0 0 0 3 16v2a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2a.996.996 0 0 0-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707A.996.996 0 0 0 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zm-7 5a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22z"></path></svg>
													<span class="pulse bg-success"></span>
												</a>
												<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
													<div class="drop-heading">
														<div class="d-flex">
															<h5 class="mb-0 text-dark">Notifications</h5>
															<span class="badge bg-danger ms-auto br-5">4</span>
														</div>
													</div>
													<div class="dropdown-divider mt-0"></div>
													<div class="header-dropdown-scroll1">
														<a href="emailinbox.html" class="dropdown-item d-flex">
															<div class="notifyimg bg-success-transparent">
																<i class="fa fa-thumbs-o-up text-success"></i>
															</div>
															<div>
																<strong>Someone likes our posts.</strong>
																<div class="small text-muted">3 hours ago</div>
															</div>
														</a>
														<a href="emailinbox.html" class="dropdown-item d-flex">
															<div class="notifyimg bg-primary-transparent">
																<i class="fa fa-exclamation-triangle text-primary"></i>
															</div>
															<div>
																<strong> Issues Fixed</strong>
																<div class="small text-muted">30 mins ago</div>
															</div>
														</a>
														<a href="emailinbox.html" class="dropdown-item d-flex">
															<div class="notifyimg bg-warning-transparent">
																<i class="fa fa-commenting-o text-warning"></i>
															</div>
															<div>
																<strong> 3 New Comments</strong>
																<div class="small text-muted">5  hour ago</div>
															</div>
														</a>
														<a href="emailinbox.html" class="dropdown-item d-flex">
															<div class="notifyimg bg-danger-transparent">
																<i class="fa fa-cogs text-danger"></i>
															</div>
															<div>
																<strong> Server Rebooted.</strong>
																<div class="small text-muted">45 mintues ago</div>
															</div>
														</a>
														<a href="emailinbox.html" class="dropdown-item d-flex">
															<div class="notifyimg bg-info-transparent">
																<i class="fa fa-thumbs-o-up text-info"></i>
															</div>
															<div>
																<strong>Someone likes our posts.</strong>
																<div class="small text-muted">3 hours ago</div>
															</div>
														</a>
													</div>
													<div class="dropdown-divider mb-0"></div>
													<div class=" text-center p-2">
														<a href="emailinbox.html" class="text-dark pt-0">View All Notifications</a>
													</div>
												</div>
											</li><!-- Notification -->


											<li class="header-nav-link dropdown">
												<a href="javascript:void(0);" class="nav-link icon" data-bs-toggle="dropdown">
													<img class="avatar rounded-circle" src="{{ asset('solic_pro/assets/images/users/male/32.jpg') }}" alt="image">
												</a>
												<ul class="dropdown-menu w-250 pt-0 dropdown-menu-arrow dropdown-menu-right">
													<li>
														<div class="dropdown-header mb-2 p-3 text-center">
															<img class="avatar avatar-xl rounded-circle mx-auto mb-2" src="{{ asset('solic_pro/assets/images/users/male/32.jpg') }}" alt="image">
															<h5 class="mb-0">Jonathan Mills</h5>
															<p class="mb-0 fs-13 opacity-75">Jonathan@gmail.com</p>
														</div>
													</li>
													<li>
														<a href="profile.html" class="dropdown-item d-flex align-items-center">
															<i class="ri-user-line fs-18 me-2 text-primary"></i>
															<span>Profile</span>
														</a>
													</li>
													<li>
														<a href="settings.html" class="dropdown-item d-flex align-items-center">
															<i class="ri-settings-5-line fs-18 me-2 text-primary"></i>
															<span>Settings</span>
														</a>
													</li>
													<li>
														<a href="emailinbox.html" class="dropdown-item d-flex align-items-center">
															<i class="ri-mail-line fs-18 me-2 text-primary"></i>
															<span>Inbox</span>
															<span class="ms-auto badge bg-success">2</span>
														</a>
													</li>
													<li>
														<a href="faq.html" class="dropdown-item d-flex align-items-center">
															<i class="ri-question-line fs-18 me-2 text-primary"></i>
															<span>Need help?</span>
														</a>
													</li>
													<li>
														<a href="login.html" class="dropdown-item d-flex align-items-center">
															<i class="ri-logout-circle-r-line fs-18 me-2 text-primary"></i>
															<span>Sign out</span>
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
					<div class="sticky">
						<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
						<aside class="app-sidebar">
							<div class="app-sidebar__header">
								<a class="main-logo" href="index.html">
									<img src="{{ asset('solic_pro/assets/images/brand/light-logo.png') }}" class="desktop-logo desktop-logo-dark" alt="soliclogo">
									<img src="{{ asset('solic_pro/assets/images/brand/dark-logo.png') }}" class="desktop-logo" alt="soliclogo">
									<img src="{{ asset('solic_pro/assets/images/brand/icon.png') }}" class="mobile-logo mobile-logo-dark" alt="soliclogo">
									<img src="{{ asset('solic_pro/assets/images/brand/icon-2.png') }}" class="mobile-logo" alt="soliclogo">
								</a>
							</div>
							<div class="main-sidemenu">
								<div class="slide-left disabled" id="slide-left">
									<svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
										<path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
									</svg>
								</div>

								@include('layouts.includes.side_bar')


							</div>
						</aside>
					</div>
					<!-- END LEFT-SIDEBAR-MENU -->
				</div>

				<!-- START APP-CONTENT -->
				<div class="main-content app-content">

					<!-- START PAGE-HEADER -->
					<div class="page-header main-container container-fluid px-5">
						<h4 class="page-title">Dashboard 01</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Saas Dashboard</li>
						</ol>
					</div>
					<!-- END PAGE-HEADER -->

					<!-- START MAIN-CONTAINER -->
					<div class="main-container container-fluid">

						
						@yield('content')


					</div>
				</div>
			</div>
			<!-- END SIDEBAR-RIGHT -->





			<!-- START FOOTER -->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 text-center">
							Copyright © 2023 <a href="#">Solic</a>. Designed by <a href="#">Spruko Technologies Private Limited</a> All rights reserved.
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
		<script src="{{ asset('solic_pro/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
    	<script src="{{ asset('solic_pro/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

		<!-- SELECT2 JS -->
		<script src="{{ asset('solic_pro/assets/plugins/select2/select2.full.min.js')}}"></script>
		<script src="{{ asset('solic_pro/assets/js/select2.js')}}"></script>

		<!-- STICKY JS-->
		<script src="{{ asset('solic_pro/assets/js/sticky.js')}}"></script>

		<!-- SIDEMENU JS-->
		<script src="{{ asset('solic_pro/assets/plugins/sidemenu/sidemenu.js')}}"></script>

		<!-- PERFECT SCROLL BAR JS-->
		<script src="{{ asset('solic_pro/assets/plugins/pscrollbar/perfect-scrollbar.js')}}"></script>
		<script src="{{ asset('solic_pro/assets/plugins/pscrollbar/pscroll-sidemenu.js')}}"></script>

		<!-- SIDEBAR JS -->
		<script src="{{ asset('solic_pro/assets/plugins/sidebar/sidebar.js')}}"></script>

		<!-- CUSTOM-SWICTHER JS -->
		<script src="{{ asset('solic_pro/assets/js/custom-switcher.js')}}"></script>

		<!-- SWITCHER JS -->
		<script src="{{ asset('solic_pro/assets/switcher/js/switcher.js')}}"></script>

		<!-- CUSTOM JS-->
		<script src="{{ asset('solic_pro/assets/js/custom.js')}}"></script>

	</body>
</html>