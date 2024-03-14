<!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

</body>
</html>

<html lang="en">
    <!--begin::Head-->
    <head><base href="">
        <title>Admin</title>        
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta charset="utf-8" />
        <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
        <link rel="shortcut icon" href="{{ asset('demo1/dist/assets/media/logos/favicon.ico') }}" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <link href="{{ asset('demo1/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('demo1/dist/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('demo1/dist/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    </head>

    <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
        
        <div class="d-flex flex-column flex-root">

			<div class="page d-flex flex-row flex-column-fluid">

				<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
					<!--begin::Brand-->
					<div class="aside-logo flex-column-auto" id="kt_aside_logo">
					  <!--begin::Logo-->
                        <a href="/admin">
                            <img alt="Logo" src="../demo1/dist/assets/media/logos/logo-1-dark.png" class="h-80px logo" />
                        </a>
                        <!--end::Logo-->
                       <!--begin::Aside toggler-->
						<div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
						</div>
						<!--end::Aside toggler-->
                    </div>
                    <!--end::Brand-->
                    <!--begin::Aside menu-->
                    <div class="aside-menu flex-column-fluid">
                        <!--begin::Aside Menu-->
                        <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
                            <!--begin::Menu-->
                            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
                               
                                <div class="menu-item">
                                    <a class="menu-link " href="/admin">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                            <span class="svg-icon svg-icon-2">
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">ADMINS</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="/admin/gestionnaires">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">GESTIONNAIRES</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="/admin/categories">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Catégories</span>
                                    </a>
                                </div>
                                
                                
                               
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Aside Menu-->
                    </div>
                    
                   
                    <!--end::Footer-->
                </div>
                <!--end::Aside-->
                <!--begin::Wrapper-->



                <div style="margin-top: -7%;" class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

                    

                    @yield('content')


                    {{--  --}}
                </div>

            </div>

        </div>

        <script>var hostUrl = "assets/";</script>

        <script src="{{ asset('demo1/dist/assets/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('demo1/dist/assets/js/scripts.bundle.js') }}"></script>

        <script src="{{ asset('demo1/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>

        <script src="{{ asset('demo1/dist/assets/js/custom/widgets.js') }}"></script>
        <script src="{{ asset('demo1/dist/assets/js/custom/apps/chat/chat.js') }}"></script>
        <script src="{{ asset('demo1/dist/assets/js/custom/modals/create-app.js') }}"></script>
        <script src="{{ asset('demo1/dist/assets/js/custom/modals/upgrade-plan.js') }}"></script>
        <script src="{{ asset('demo1/dist/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
        <script src="{{ asset('demo1/dist/assets/js/custom/apps/customers/list/export.js') }}"></script>
        <script src="{{ asset('demo1/dist/assets/js/custom/apps/customers/list/list.js') }}"></script>
        <script src="{{ asset('demo1/dist/assets/js/custom/apps/customers/add.js') }}"></script>
        <script src="{{ asset('demo1/dist/assets/js/custom/widgets.js') }}"></script>
        <script src="{{ asset('demo1/dist/assets/js/custom/apps/chat/chat.js') }}"></script>
        <script src="{{ asset('demo1/dist/assets/js/custom/modals/create-app.js') }}"></script>
        <script src="{{ asset('demo1/dist/assets/js/custom/modals/upgrade-plan.js') }}"></script>


        <!--end::Javascript-->
    </body>
    <!--end::Body-->
</html>