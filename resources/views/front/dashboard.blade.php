
@extends('front.master')
@section('title')
    Dashboard Discounter
@endsection
@section('content')
    <div class="home-page">

        <!-- Introduction -->

        <div class="introduction">
            <!-- <div class="mask">
            </div> -->
            <div class="col-sm-12 hidden-xs-down  hidden-sm-downs hidden-md-down  ">

                    <div class="dropdown " style="width: 50px;">
                        <img style="border-radius: 50%" src="https://scontent-vie1-1.xx.fbcdn.net/hprofile-xpa1/v/t1.0-1/p160x160/1517654_990348991051290_7388562664772650216_n.jpg?oh=73a989ab22c9d0e8da04fba9a5c331ce&oe=578E3788" class="dropdown-toggle" type="button" data-toggle="dropdown">
                        <span class="caret"></span></img>
                        <ul class="dropdown-menu" style="top: 50px;font-size: 14px;font-weight: 100;text-align:center;padding-top: 10px;">

                            <li >{{ \Auth::User()->name }}</li>
                            <li ></li>


                            <hr>
                            <li><i class="fa fa-map-marker"></i> {{  $data->city }} {{  $data->state }}</li>
                            <li><i class="fa fa-power-off"></i> <a href="logout">Logout</a></li>
                        </ul>
                    </div>

            </div>
            <div class="intro-content col-md-12 hidden-xs">

                <div class="row">





                    <div class="col-md-2 col-sm-2 col-sm-12"></div>
                    <div class="col-lg-12  col-md-12 col-sm-12 ">


                        {{ FORM::open(array(

                                'action' => 'front\GetAndServeCoupon@getCouponsByCutomerCountry'
                            )) }}
                        <div class="form-group col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
                            <h1>Choose Category</h1>
                        </div>
                        <div class="form-group col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">



                            {{ Form::select('category',$categorii, null,
                            array(
                                'class' => 'select2_single form-control',
                            ))
                            }}


                        </div>
                        <div class="form-group col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 text-center">
                            {!! FORM::submit('Choose',array(
                                'class' => 'btn btn-success '

                            )) !!}
                        </div>
                        {{ FORM::close() }}
                    </div>

                    <div class="col-md-2 col-sm-2 col-sm-12"></div>
                    <div class="col-lg-12  col-md-12 col-sm-12">
                        <div class="social-media">
                            <a href="#" class="fa fa-facebook"  title="Facebook"></a>
                            <a href="#" class="fa fa-twitter"  title="Twitter"></a>

                            <a href="#" class="fa fa-linkedin"  title="Linkedin"></a>
                            <a href="#" class="fa fa-behance"  title="Behance"></a>

                        </div>
                    </div>




                </div>
            </div>
            <div class="intro-content col-md-12">



                <div class="row" >
                    <div class="col-md-10 col-md-offset-1" id="scratch-container">
                        <canvas class="canvas img-responsive" id="scratch-canvas"></canvas>
                        <div id="mata" class="col-md-12 col-xs-12 col-sm-12">


                        </div>
                    </div>
                </div>

                </div>


            <!-- Social Media Icons [ END ] -->
        </div>

        <!-- Navigation Menu -->

        @include('front.includes.menu')
    </div>
@endsection
