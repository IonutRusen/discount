
@extends('front.master')
@section('title')
    Dashboard Discounter
@endsection
@section('content')

    {{ link_to_route('userDashboard', '', null, array('class' => 'close-btn')) }}
    <div id="portfolio" class="profile-page container-fluid page">

        <div class="row">

            <!--( a ) Portfolio Page Fixed Image Portion -->

            <div class="image-container col-md-3 col-sm-12">
                <div class="mask">
                </div>
                <div class="main-heading">
                    <h1>Scratch & Win</h1>

                </div>
            </div>

            <!--( b ) Portfolio Page Content -->
            <div class="content-container col-md-9 col-sm-12">

                <!--( A ) Portfolio -->

                <div class="portfolio clearfix full-height">
                    <h2 class="small-heading"><small class="text-center">Scratch & WIN</small></h2>

                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                            <div class="project-container">
                                <div class="row">


                                    <!-- Portfolio Control Buttons [ END ] -->

                                    <div id="projects" class="projet-items clearfix">

                                                    <div class="col-md-8 col-sm-8 col-xs-12 col-sm-offset-2 col-md-offset-2" id="scratch-container" style="border: 1px solid #000">

                                                        <canvas class="canvas img-responsive" id="scratch-canvas"></canvas>
                                                        <div style="border: 1px solid #000 " id="mata" >

                                                            {{ $voucher }}

                                                        </div>





                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>




            </div>

@endsection
@section('customscript')
    <script type="text/javascript" src="frontEnd/assets/js/scratchcard.js"></script>
    <script>

        //Get the context of the canvas element we want to select

        var c = $('#scratch-canvas');
        var ct = c.get(0).getContext('2d');
        var ctx = document.getElementById("scratch-canvas").getContext("2d");
        /*************************************************************************/

        //Run function when window resizes


        function respondCanvas() {
            c.attr('width', jQuery("#mata").width());
            c.attr('height', jQuery("#mata").height());
            //Call a function to redraw other content (texts, images etc)

        }

        //Initial call
        respondCanvas();




    </script>

@endsection