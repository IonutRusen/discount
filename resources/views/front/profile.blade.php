
@extends('front.master')
@section('title')
    Dashboard Discounter
@endsection
@section('content')

    {{ link_to_route('userDashboard', '', null, array('class' => 'close-btn')) }}
<div id="portfolio" class="portfolio-page container-fluid page">

    <div class="row">

        <!--( a ) Portfolio Page Fixed Image Portion -->

        <div class="image-container col-md-3 col-sm-12">
            <div class="mask">
            </div>
            <div class="main-heading">
                <h1>Profile</h1>

            </div>
        </div>

        <!--( b ) Portfolio Page Content -->

        <div class="content-container col-md-9 col-sm-12">

            <!--( A ) Portfolio -->

            <div class="portfolio clearfix full-height">
                <h2 class="small-heading"><small class="text-center">In order to receive gift cards that you can enjoy, please fill your profile info</small></h2>

                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                        <div class="project-container">
                            <div class="row">


                                <!-- Portfolio Control Buttons [ END ] -->

                                <div id="projects" class="projet-items clearfix">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-sm-offset-3 col-md-offset-3">
                                        {!! FORM::open(array(
                                                    'class' => 'form-horizontal form-label-left input_mask',
                                                    'action' => 'front\AddCustomerProfile@addProfile'
                                                )) !!}


                                        <fieldset class="form-group">


                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                {!! FORM::text('age', null ,
                                                                         array(
                                                                              'class'=>'form-control ',
                                                                              'placeholder'=>'Age',

                                                                              )) !!}
                                                <span class="text-danger">{!! $errors->getBag('default')->first('age') !!}</span>
                                            </div>

                                        </fieldset>
                                        <fieldset class="form-group">


                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                {!! Form::select('gender', array('' => 'Gender', '0' => 'Female', '1' => 'Male'),null,
                                                array(
                                                    'class' => 'select2_single form-control',


                                                )


                                                ); !!}
                                                <span class="text-danger">{!! $errors->getBag('default')->first('gender') !!}</span>

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
                                                <span class="text-danger">{!! $errors->getBag('default')->first('country') !!}</span>
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
                                                <span class="text-danger">{!! $errors->getBag('default')->first('state') !!}</span>
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
    <script>
        //AJAX NORMAL
        $(document).ready(function(){
            $('#country').change(function(){
                $_token = "{{ csrf_token() }}";
                $.ajax({
                    url: 'admin/ajax/state',
                    type: "get",

                    data: {id: $('#country option:selected').val(), _token: $_token},
                    success: function(data){

                        var $state = $("#state");
                        var $city = $("#city");
                        $state.empty();

                        $city.empty();
                        $.each(data,function(idx, obj) {

                            $state.append('<option value="' + obj.id +'">' + obj.name + '</option>');
                        });

                        $state.prepend("<option value='0' selected='selected'>All</option>");

                    }
                });

            });
        });
        $(document).ready(function(){
            $('#state').change(function(){

                $.ajax({
                    url: 'admin/ajax/city',
                    type: "get",

                    data: {id: $('#state option:selected').val()},
                    success: function(data){

                        var $city = $("#city");
                        $city.empty();
                        $.each(data,function(idx, obj) {

                            $city.append('<option value="' + obj.id +'">' + obj.name + '</option>');
                        });

                    }
                });
            });
        });
        //AJAX NORMAL
    </script>
@endsection