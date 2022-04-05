<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" dir="ltr">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin RTL Theme #1 for statistics, charts, recent events and reports" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->


        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />

        <link href="{{url('/')}}/admin/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->

        <link href="{{url('/')}}/admin/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{url('/')}}/admin/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('/')}}/admin/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />


        <link href="{{url('/')}}/admin/layouts/layout/css/themes/light2.min.css" rel="stylesheet" type="text/css" id="style_color" />

        <link href="{{url('/')}}/admin/layouts/layout/css/fontawesome-iconpicker.min.css" rel="stylesheet">


        <link href="{{url('/')}}/admin/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('/')}}/admin/layouts/layout/css/main.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link href="https://fonts.googleapis.com/earlyaccess/droidarabickufi.css" rel="stylesheet">

        <link href="{{url('/')}}/admin/global/css/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css" />

        <link href="{{url('/')}}/style/style.css" rel="stylesheet"> 
        <link href="{{url('/')}}/style/content_style.css" rel="stylesheet"> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>


        {{-- datatables --}}

        <link rel="shortcut icon" href="favicon.ico" /> </head>
        <!-- END HEAD -->

       <body class="page-header-fixed page-sidebar-closed-hide-
        page-content-white page-md">
         <div class="page-wrapper">
            <!-- BEGIN HEADER -->
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="{{url('/')}}">
                            <img   src="{{url('/')}}/admin/layouts/layout/img/logo-invert.png" alt="logo" class="logo-default" /> </a>
                        <div class="menu-toggler sidebar-toggler">
                            <span></span>
                        </div>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after "dropdown-extended" to change the dropdown styte -->
                            <!-- DOC: Apply "dropdown-hoverable" class after below "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                            <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->


                           

                            <!-- END TODO DROPDOWN -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="/public/uploads/user/{{Auth::user()->photo}}" />
                                    <span class="username username-hide-on-mobile">
                                     {{ Auth::user()->name }}
                                     </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="{{url('/')}}/dashboard/users/{{ Auth::user()->id }}/edit">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>

                                     <li>
                                        <a href="{{url('/')}}/">
                                            <i class="icon-user"></i> WebSite</a>
                                    </li>
                                    
                                    <li>
                                        <a href="{{url('/')}}/dashboard/logout">
                                        <i class="icon-key"></i> Sign Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper">
                    <!-- BEGIN SIDEBAR -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <div class="page-sidebar navbar-collapse collapse">
                        <!-- BEGIN SIDEBAR MENU -->
                        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                                <li class="sidebar-toggler-wrapper hide">
                                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                                    <div class="sidebar-toggler">
                                        <span></span>
                                    </div>
                                    <!-- END SIDEBAR TOGGLER BUTTON -->
                                </li>
                                
                 

                            <li class="nav-item  {{Request::is('dashboard')?'active':''}}" >
                                <a href="{{url('/')}}/dashboard" >
                                    <i class="fa fa-home"></i>
                                    <span class="title"> Home </span>
                                </a>
                            </li>
<!-- 
                            <li class="nav-item  {{Request::is('dashboard/settings*')?'active':''}}" >
                                <a href="{{url('/')}}/dashboard/settings" >
                                    <i class="fa fa-cogs"></i>
                                    <span class="title"> Settings </span>
                                </a>
                            </li>

                            <li class="nav-item  {{ Request::is('dashboard/users*')?'active':''}}" >
                                <a href="{{url('/')}}/dashboard/users" >
                                    <i class="fa fa-user"></i>
                                    <span class="title"> Admins </span>
                                </a>
                            </li> -->
                            



                        </ul>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                    @if(session()->has('success'))
                        <div class="box-body">
                            <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                               {{ @session()->get('success') }}
                            </div>
                        </div>
                    @endif
                     @if(session()->has('warning'))
                        <div class="box-body">
                            <div class="alert alert-warning alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                               {{ @session()->get('warning') }}
                            </div>
                        </div>
                    @endif

                        @if(count($errors))

                        <div class="alert alert-danger">

                            <ul>

                                @foreach($errors->all() as $error)

                                   <li>{{ $error }}</li>

                                @endforeach

                            </ul>

                        </div>

                        @endif


                        @yield('content') 

                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
            <div class="page-footer">
                <div class="page-footer-inner"> Copyright &copy;
                    <a target="_blank" href="#">Abdo</a> &nbsp;|&nbsp; {{ date("Y") }}
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- END FOOTER -->
        </div>
        <!--[if lt IE 9]>
        <script src="{{url('/')}}/admin/global/plugins/respond.min.js"></script>
        <script src="{{url('/')}}/admin/global/plugins/excanvas.min.js"></script> 
        <script src="{{url('/')}}/admin/global/plugins/ie8.fix.min.js"></script> 
        <![endif]-->
        <!-- BEGIN CORE PLUGINS -->


          <script src="{{url('/')}}/admin/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/admin/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/admin/global/scripts/app.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/admin/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/admin/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="{{url('/')}}/admin/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/admin/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
          <script src="{{url('/')}}/admin/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


        @yield('js')



    </body>

</html>