@extends('front.master')
@section('title')
    Dashboard Discounter
@endsection
@section('content')
<div id="portfolio" class="portfolio-page container-fluid page">

    <div class="row">

        <!--( a ) Portfolio Page Fixed Image Portion -->

        <div class="image-container col-md-3 col-sm-12">
            <div class="mask">
            </div>
            <div class="main-heading">
                <h1>Portfolio</h1>
            </div>
        </div>

        <!--( b ) Portfolio Page Content -->

        <div class="content-container col-md-9 col-sm-12">

            <!--( A ) Portfolio -->

            <div class="portfolio clearfix full-height">
                <h2 class="small-heading">PORTFOLIO</h2>

                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                        <div class="project-container">
                            <div class="row">
                                <div class="project-controls">
                                    <button class="filter" data-filter="all">All</button>
                                    <button class="filter" data-filter=".graphic-design">Graphic Design</button>
                                    <button class="filter" data-filter=".web-design">Web Designs</button>
                                    <button class="filter" data-filter=".app-development">App Development</button>
                                </div>

                                <!-- Portfolio Control Buttons [ END ] -->

                                <div id="projects" class="projet-items clearfix">

                                    <!-- Portfolio Image -->

                                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix graphic-design">
                                        <div class="project">
                                            <img src="assets/img/portfolio/thumbs/image_1.jpg" alt="">
                                            <div class="ovrly">
                                            </div>
                                            <div class="buttons">
                                                <a href="#" class="fa fa-link"></a>
                                                <a href="#portfolio-1" class="fa fa-search show-popup"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Popup Content -->

                                    <div class="pop-up-box" id="portfolio-1">
                                        <img alt="" src="assets/img/portfolio/image_1.jpg" class=" hidden-xs">
                                        <div class="popup-content">
                                            <h3>PROJECT NAME</h3>
                                            <p>
                                                Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                                            </p>
                                            <a href="#">PREVIEW</a>
                                        </div>
                                    </div>

                                    <!-- Single Portfolio Item [ END ] -->



                                    <!-- Portfolio Image -->

                                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix web-design">
                                        <div class="project">
                                            <img src="assets/img/portfolio/thumbs/image_2.jpg" alt="">
                                            <div class="ovrly">
                                            </div>
                                            <div class="buttons">
                                                <a href="#" class="fa fa-link"></a>
                                                <a href="#portfolio-2" class="fa fa-search show-popup"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Popup Content -->

                                    <div class="pop-up-box" id="portfolio-2">
                                        <img alt="" src="assets/img/portfolio/image_2.jpg" class=" hidden-xs">
                                        <div class="popup-content">
                                            <h3>PROJECT NAME</h3>
                                            <p>
                                                Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                                            </p>
                                            <a href="#">PREVIEW</a>
                                        </div>
                                    </div>

                                    <!-- Single Portfolio Item [ END ] -->



                                    <!-- Portfolio Image -->

                                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix app-development">
                                        <div class="project">
                                            <img src="assets/img/portfolio/thumbs/image_3.jpg" alt="">
                                            <div class="ovrly">
                                            </div>
                                            <div class="buttons">
                                                <a href="#" class="fa fa-link"></a>
                                                <a href="#portfolio-3" class="fa fa-search show-popup"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Popup Content -->

                                    <div class="pop-up-box" id="portfolio-3">
                                        <img alt="" src="assets/img/portfolio/image_3.jpg" class=" hidden-xs">
                                        <div class="popup-content">
                                            <h3>PROJECT NAME</h3>
                                            <p>
                                                Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                                            </p>
                                            <a href="#">PREVIEW</a>
                                        </div>
                                    </div>

                                    <!-- Single Portfolio Item [ END ] -->



                                    <!-- Portfolio Image -->

                                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix graphic-design">
                                        <div class="project">
                                            <img src="assets/img/portfolio/thumbs/image_4.jpg" alt="">
                                            <div class="ovrly">
                                            </div>
                                            <div class="buttons">
                                                <a href="#" class="fa fa-link"></a>
                                                <a href="#portfolio-4" class="fa fa-search show-popup"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Popup Content -->

                                    <div class="pop-up-box" id="portfolio-4">
                                        <img alt="" src="assets/img/portfolio/image_4.jpg" class=" hidden-xs">
                                        <div class="popup-content">
                                            <h3>PROJECT NAME</h3>
                                            <p>
                                                Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                                            </p>
                                            <a href="#">PREVIEW</a>
                                        </div>
                                    </div>

                                    <!-- Single Portfolio Item [ END ] -->



                                    <!-- Portfolio Image -->

                                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix web-design">
                                        <div class="project">
                                            <img src="assets/img/portfolio/thumbs/image_5.jpg" alt="">
                                            <div class="ovrly">
                                            </div>
                                            <div class="buttons">
                                                <a href="#" class="fa fa-link"></a>
                                                <a href="#portfolio-5" class="fa fa-search show-popup"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Popup Content -->

                                    <div class="pop-up-box" id="portfolio-5">
                                        <img alt="" src="assets/img/portfolio/image_5.jpg" class=" hidden-xs">
                                        <div class="popup-content">
                                            <h3>PROJECT NAME</h3>
                                            <p>
                                                Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                                            </p>
                                            <a href="#">PREVIEW</a>
                                        </div>
                                    </div>

                                    <!-- Single Portfolio Item [ END ] -->



                                    <!-- Portfolio Image -->

                                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix app-development">
                                        <div class="project">
                                            <img src="assets/img/portfolio/thumbs/image_6.jpg" alt="">
                                            <div class="ovrly">
                                            </div>
                                            <div class="buttons">
                                                <a href="#" class="fa fa-link"></a>
                                                <a href="#portfolio-6" class="fa fa-search show-popup"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Popup Content -->

                                    <div class="pop-up-box" id="portfolio-6">
                                        <img alt="" src="assets/img/portfolio/image_6.jpg" class=" hidden-xs">
                                        <div class="popup-content">
                                            <h3>PROJECT NAME</h3>
                                            <p>
                                                Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                                            </p>
                                            <a href="#">PREVIEW</a>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Footer -->

            <div class="footer clearfix">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <p class="copyright">Copyright &copy; 2015
                                    <a href="#">Your Company</a>
                                </p>
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <p class="author">
                                    Theme by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 col-sm-offset-3 col-md-offset-3">
    {!! FORM::open(array(
                'class' => 'form-horizontal form-label-left input_mask',
                'action' => 'front\AddCustomerProfile@addProfile'
            )) !!}

    <fieldset class="form-group">


        <div class="col-md-12 col-sm-12 col-xs-12">
            {!! FORM::text('name', null ,
                                     array(
                                          'class'=>'form-control ',
                                          'placeholder'=>'Name',

                                          )) !!}

        </div>

    </fieldset>
    <fieldset class="form-group">


        <div class="col-md-12 col-sm-12 col-xs-12">
            {!! FORM::text('age', null ,
                                     array(
                                          'class'=>'form-control ',
                                          'placeholder'=>'Age',

                                          )) !!}
            {{ $errors->fails->first('age') }}
        </div>

    </fieldset>
    <fieldset class="form-group">


        <div class="col-md-12 col-sm-12 col-xs-12">
            {!! Form::select('gender', array('' => 'Gender', '0' => 'Female', '1' => 'Male'),null,
            array(
                'class' => 'select2_single form-control',
                'id' =>'country'

            )


            ); !!}
            {{ $errors->fails->first('gender') }}

        </div>

    </fieldset>
    <fieldset class="form-group">


        <div class="col-md-12 col-sm-12 col-xs-12">
            {!! Form::select('country',$country, null,
            array(
                'class' => 'select2_single form-control',
                'id' =>'country'

            ))
            !!}
            {{ $errors->fails->first('country') }}
        </div>

    </fieldset>
    <fieldset class="form-group">


        <div class="col-md-12 col-sm-12 col-xs-12">
            {!! Form::select('state', array(

            '' => 'Select State'), null,
            array(
                'class' => 'select2_single form-control',
                'id' =>'state'

            ))
            !!}
            {{ $errors->fails->first('state') }}
        </div>

    </fieldset>
    <fieldset class="form-group">


        <div class="col-md-12 col-sm-12 col-xs-12">
            {!! Form::select('city', array(

            '' => 'Select Country and State first'), null,
            array(
                'class' => 'select2_single form-control',

                'id' => 'city'

            ))
            !!}

        </div>

    </fieldset>
    <fieldset class="form-group">


        <div class="col-md-12 col-sm-12 col-xs-12">
            {!! FORM::submit('Save',
                                     array(
                                          'class'=>'btn btn-success col-md-12',
                                          'placeholder'=>'City',

                                          )) !!}

        </div>

    </fieldset>
{{ FORM::close() }}
</div>
@endsection