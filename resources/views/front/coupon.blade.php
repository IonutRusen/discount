<?php
    $object = json_decode($voucher);
    $data = @unserialize($object->valoare );
?>
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
                                    <div id="projects" class="projet-items clearfix">
                                        <div class="col-md-8 col-sm-8 col-xs-12 col-sm-offset-2 col-md-offset-2" id="scratch-container" >
                                         <canvas class="canvas img-responsive" id="scratch-canvas"></canvas>
                                        <div class="text-center" id="mata" >
                                            <br/>
                                            <br/>

                                            {{HTML::image('administrare/src/logos/'.$object->logo )}}<br/> <br/>


                                            @if ($data !== false)
                                                @foreach($data as $value=>$key)
                                                    @if( $object->type == 1 )

                                                        <h4>
                                                            {{ "Step $value :" }}
                                                            {{  $key  }}
                                                            {{HTML::image('frontEnd/images/percent.png' )}}
                                                        </h4>
                                                    @else
                                                        <h4>
                                                            {{ "Step $value :"}}
                                                            {{  $key }}
                                                            {{  $object->currency  }}</h4>
                                                    @endif

                                                @endforeach
                                             @else
                                                @if( $object->type == 1 )
                                                    <h2>{{  $object->valoare  }}
                                                        {{HTML::image('frontEnd/images/percent.png' )}}</h2>
                                                @else
                                                    <h2>{{  $object->valoare  }}
                                                        {{  $object->currency  }}</h2>
                                                @endif
                                            @endif


                                                <br/>

                                        </div>

                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                            <div class="project-container">
                                <div class="row">
                                    <div id="projects" class="projet-items clearfix">
                                        <div class="col-md-8 col-sm-8 col-xs-12 col-sm-offset-2 col-md-offset-2">
                                            <div class="col-md-12">
                                                <div class="pull-left text-center col-md-6" id="social">
                                                    {{ HTML::image('frontEnd/images/facebookbrag.png') }}
                                                    {{ HTML::image('frontEnd/images/twittbrag.png') }}
                                                    {{ HTML::image('frontEnd/images/googlebrag.png') }}
                                                </div>
                                                <div class="pull-right text-center col-md-6" id="social">
                                                    <a href="#" class="btn btn-success">View Voucher</a>
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