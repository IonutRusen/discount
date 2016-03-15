<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <title> @yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- Bootstrap core CSS -->
    {!! HTML::style('administrare/src/css/bootstrap.min.css') !!}
    {!! HTML::style('administrare/src/fonts/css/font-awesome.min.css') !!}
    {!! HTML::style('administrare/src/css/animate.min.css') !!}
    {!! HTML::style('administrare/src/css/custom.css') !!}
    {!! HTML::style('administrare/src/css/maps/jquery-jvectormap-2.0.1.css') !!}
    {!! HTML::style('administrare/src/css/icheck/flat/green.css') !!}
    {!! HTML::style('administrare/src/css/floatexamples.css') !!}




    {!! HTML::script('administrare/src/js/jquery.min.js') !!}




    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    {!! HTML::script('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') !!}
    {!! HTML::script('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') !!}

    <![endif]-->

</head>


<body class="nav-md">
<div class="container body">


    <div class="main_container">

        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">

                <div class="navbar nav_title" style="border: 0;">
                    <a href="/admin/dashboard" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
                </div>
                <div class="clearfix"></div>




                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                    <div class="menu_section">

                        <ul class="nav side-menu">
                            <li><a href="dashboard"><i class="fa fa-home"></i> Home </a>

                            </li>
                            <li><a><i class="fa fa-edit"></i> Company <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="display: none">
                                    <li><a href="/admin/profile">Profile</a>
                                    </li>
                                    <li><a href="/admin/subscriptions">Subscriptions</a>
                                    </li>
                                    <li><a href="/admin/invoices">My Invoices</a>
                                    </li>

                                </ul>
                            </li>
                            <li><a><i class="fa fa-tag"></i>Vouchers<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="display: none">
                                    <li><a href="/admin/addnew">New Voucher</a>
                                    </li>
                                    <li><a href="/admin/addnewComplex">New Complex Voucher</a>
                                    </li>
                                    <li><a href="/admin/allvouchers">All Coupons</a>
                                    </li>
                                    <li><a href="#">Templates</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-table"></i> Reports <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="display: none">
                                    <li><a href="#">Tables</a>
                                    </li>
                                    <li><a href="#">Table Dynamic</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="display: none">
                                    <li><a href="#">Chart JS</a>
                                    </li>
                                    <li><a href="#">Chart JS2</a>
                                    </li>
                                    <li><a href="#">Moris JS</a>
                                    </li>
                                    <li><a href="#">ECharts </a>
                                    </li>
                                    <li><a href="#">Other Charts </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="menu_section">
                        <h3>Live On</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="display: none">
                                    <li><a href="#">E-commerce</a>
                                    </li>
                                    <li><a href="#">Projects</a>
                                    </li>
                                    <li><a href="#">Project Detail</a>
                                    </li>
                                    <li><a href="#">Contacts</a>
                                    </li>
                                    <li><a href="#">Profile</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="display: none">
                                    <li><a href="#">404 Error</a>
                                    </li>
                                    <li><a href="#">500 Error</a>
                                    </li>
                                    <li><a href="#">Plain Page</a>
                                    </li>
                                    <li><a href="#">Login Page</a>
                                    </li>
                                    <li><a href="#">Pricing Tables</a>
                                    </li>

                                </ul>
                            </li>
                            <li><a><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->

            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

            <div class="nav_menu">
                <nav class="" role="navigation">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                @if ($logo)

                                    {{ HTML::image('administrare/src/logos/'.$logo) }}

                                    @endif
                                    John Doe
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                <li><a href="profile">  Profile</a>
                                </li>
                                <li>
                                    <a href="subscriptions">

                                        <span>Subscriptions</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Help</a>
                                </li>
                                <li><a href="#"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </li>
                            </ul>
                        </li>



                    </ul>
                </nav>
            </div>

        </div>
        <!-- /top navigation -->


        <!-- page content -->
        <div class="right_col" role="main">
            <br />
            <div class="">