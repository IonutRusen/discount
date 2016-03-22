
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
            <div class="col-sm-12">

                    <div class="dropdown" style="width: 50px;">
                        <img style="border-radius: 50%" src="https://scontent-vie1-1.xx.fbcdn.net/hprofile-xpa1/v/t1.0-1/p160x160/1517654_990348991051290_7388562664772650216_n.jpg?oh=73a989ab22c9d0e8da04fba9a5c331ce&oe=578E3788" class="dropdown-toggle" type="button" data-toggle="dropdown">
                        <span class="caret"></span></img>
                        <ul class="dropdown-menu" style="top: 50px;font-size: 14px;font-weight: 100;text-align:center;padding-top: 10px;">

                            <li >Rusen Ionut</li>

                            <hr>
                            <li><i class="fa fa-map-marker"></i> Sector 6 Bucuresti</li>
                            <li><i class="fa fa-power-off"></i> <a href="#">Logout</a></li>
                        </ul>
                    </div>

            </div>
            <div class="intro-content col-md-12 hidden-xs">

                <div class="row">

                    <div class="col-md-2 col-sm-2 col-sm-12"></div>
                    <div class="col-lg-12  hidden-sm-down hidden-xs-down ">
                        <div class="social-media">
                            <a href="#" class="fa fa-facebook"  title="Facebook"></a>
                            <a href="#" class="fa fa-twitter"  title="Twitter"></a>
                            <a href="#" class="fa fa-plus"  title="Google+"></a>
                            <a href="#" class="fa fa-linkedin"  title="Linkedin"></a>
                            <a href="#" class="fa fa-behance"  title="Behance"></a>
                            <a href="#" class="fa fa-flickr"  title="Flicker"></a>
                            <a href="#" class="fa fa-instagram"  title="Instagram"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-content col-md-12">



                <div class="row">
                    <div class="col-md-10 col-md-offset-1" id="scratch-container">
                        <canvas class="canvas img-responsive" id="scratch-canvas"></canvas>
                        <div id="mata" class="col-md-12 col-xs-12 col-sm-12">
                            <h2 >WINNER!!</h2>
                            <h3>Your code is:</h3>
                            <h1>AbC12dEf</h1>
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
@section('customscript')
    <script type="text/javascript" src="frontEnd/assets/js/scratchcard.js"></script>
    <script>
        $(document).ready(function () {
            //Get the context of the canvas element we want to select
            var c = $('#scratch-canvas');
            var ct = c.get(0).getContext('2d');
            var ctx = document.getElementById("scratch-canvas").getContext("2d");
            /*************************************************************************/

//Run function when window resizes
            $(window).resize(respondCanvas);

            function respondCanvas() {
                c.attr('width', jQuery("#mata").width());
                c.attr('height', jQuery("#mata").height());
                //Call a function to redraw other content (texts, images etc)

            }

            //Initial call
            respondCanvas();
        });
    </script>
@endsection