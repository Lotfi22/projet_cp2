<!DOCTYPE html>

<html lang="en">
    <!--begin::Head-->
    <head><base href="">
        <title>Admin</title>
        <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
        
        <meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
        
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta charset="utf-8" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
        <meta property="og:url" content="https://keenthemes.com/metronic" />
        <meta property="og:site_name" content="Keenthemes | Metronic" />
        <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
        <link rel="shortcut icon" href="{{ asset('demo1/dist/assets/media/logos/favicon.ico') }}" />
        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <!--end::Fonts-->
        <!--begin::Page Vendor Stylesheets(used by this page)-->
        <link href="{{ asset('demo1/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
        <!--end::Page Vendor Stylesheets-->
        <!--begin::Global Stylesheets Bundle(used by all pages)-->
        <link href="{{ asset('demo1/dist/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('demo1/dist/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
        <!--end::Global Stylesheets Bundle-->
    </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
        <!--begin::Main-->
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Page-->
            <div class="page d-flex flex-row flex-column-fluid">
                <!--begin::Aside-->
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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                                                    <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
                                                    <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
                                                    <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
                                                </svg>
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
                                                    <path opacity="0.3" d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z" fill="black" />
                                                    <path d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z" fill="black" />
                                                </svg>
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
                                                    <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
                                                    <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Catégories</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="/groupes">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="white">
                                                <path d="M14.754 10C15.7205 10 16.504 10.7835 16.504 11.75V16.499C16.504 18.9848 14.4888 21 12.003 21C9.51712 21 7.50193 18.9848 7.50193 16.499V11.75C7.50193 10.7835 8.28543 10 9.25193 10H14.754ZM7.13128 9.99906C6.78183 10.4218 6.55636 10.9508 6.51057 11.5304L6.50193 11.75V16.499C6.50193 17.3456 6.69319 18.1476 7.03487 18.864C6.70577 18.953 6.35899 19 6.00124 19C3.79142 19 2 17.2086 2 14.9988V11.75C2 10.8318 2.70711 10.0788 3.60647 10.0058L3.75 10L7.13128 9.99906ZM16.8747 9.99906L20.25 10C21.2165 10 22 10.7835 22 11.75V15C22 17.2091 20.2091 19 18 19C17.6436 19 17.298 18.9534 16.9691 18.8659C17.2697 18.238 17.4538 17.5452 17.4951 16.8144L17.504 16.499V11.75C17.504 11.0847 17.2678 10.4747 16.8747 9.99906ZM12 3C13.6569 3 15 4.34315 15 6C15 7.65685 13.6569 9 12 9C10.3431 9 9 7.65685 9 6C9 4.34315 10.3431 3 12 3ZM18.5 4C19.8807 4 21 5.11929 21 6.5C21 7.88071 19.8807 9 18.5 9C17.1193 9 16 7.88071 16 6.5C16 5.11929 17.1193 4 18.5 4ZM5.5 4C6.88071 4 8 5.11929 8 6.5C8 7.88071 6.88071 9 5.5 9C4.11929 9 3 7.88071 3 6.5C3 5.11929 4.11929 4 5.5 4Z" fill="#212121"/>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Groupe</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="/sports">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm.94,2.06a8,8,0,0,1,4,1.63L12,10.59,10.74,9.32A10,10,0,0,0,12.94,4.06ZM9.31,7.9,7.1,5.69a8,8,0,0,1,3.82-1.61A8,8,0,0,1,9.31,7.9ZM7.9,9.31a8,8,0,0,1-3.82,1.61A8,8,0,0,1,5.69,7.1Zm1.43,1.43L10.59,12l-4.9,4.9a8,8,0,0,1-1.63-4A10,10,0,0,0,9.32,10.74ZM12,13.41l1.26,1.26a10,10,0,0,0-2.2,5.26,8,8,0,0,1-4-1.63Zm2.69,2.69,2.21,2.21a8,8,0,0,1-3.82,1.61A8,8,0,0,1,14.69,16.1Zm1.41-1.41a8,8,0,0,1,3.82-1.61,8,8,0,0,1-1.61,3.82Zm-1.43-1.43L13.41,12l4.9-4.9a8,8,0,0,1,1.63,4A10,10,0,0,0,14.68,13.26Z" fill="white" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Sports</span>
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
        <!--begin::Javascript-->
        <!--begin::Global Javascript Bundle(used by all pages)-->
        <script src="{{ asset('demo1/dist/assets/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('demo1/dist/assets/js/scripts.bundle.js') }}"></script>
        <!--end::Global Javascript Bundle-->
        <!--begin::Page Vendors Javascript(used by this page)-->
        <script src="{{ asset('demo1/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
        <!--end::Page Vendors Javascript-->
        <!--begin::Page Custom Javascript(used by this page)-->
        <script src="{{ asset('demo1/dist/assets/js/custom/widgets.js') }}"></script>
        <script src="{{ asset('demo1/dist/assets/js/custom/apps/chat/chat.js') }}"></script>
        <script src="{{ asset('demo1/dist/assets/js/custom/modals/create-app.js') }}"></script>
        <script src="{{ asset('demo1/dist/assets/js/custom/modals/upgrade-plan.js') }}"></script>
        
        
        <!--end::Global Javascript Bundle-->
        <!--begin::Page Vendors Javascript(used by this page)-->
        <script src="{{ asset('demo1/dist/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
        <script src="{{ asset('demo1/dist/assets/js/custom/apps/customers/list/export.js') }}"></script>
        <script src="{{ asset('demo1/dist/assets/js/custom/apps/customers/list/list.js') }}"></script>
        <script src="{{ asset('demo1/dist/assets/js/custom/apps/customers/add.js') }}"></script>
        <script src="{{ asset('demo1/dist/assets/js/custom/widgets.js') }}"></script>
        <script src="{{ asset('demo1/dist/assets/js/custom/apps/chat/chat.js') }}"></script>
        <script src="{{ asset('demo1/dist/assets/js/custom/modals/create-app.js') }}"></script>
        <script src="{{ asset('demo1/dist/assets/js/custom/modals/upgrade-plan.js') }}"></script>

        <!--end::Page Custom Javascript-->

        <!--end::Javascript-->
    </body>
    <!--end::Body-->
</html>