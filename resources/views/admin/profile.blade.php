@extends('admin.master')
@section('title')
    Your Profile
@endsection
@section('content')
<div class="row">
    <div class="col-md-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Edit Your Profile</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />

                {!! FORM::model(App\Profile::whereUser_id(Auth::user()->id)->first(), array(

                'class' => 'form-horizontal form-label-left input_mask',
                'action' => 'admin\ProcessFormController@editProfile'
                )) !!}

                {!! FORM::hidden('user_id',Auth::user()->id) !!}
                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    {!! FORM::text('company_name', null ,
                     array(
                          'class'=>'form-control has-feedback-left',
                          'placeholder'=>'Company Name',
                          'id' => 'company_name',
                          )) !!}
                    <span class="fa fa-university form-control-feedback left" aria-hidden="true"></span>
                    <span class="text-danger">{!! $errors->getBag('default')->first('company_name') !!}</span>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    {!! FORM::text('company_tax_id', null ,
                     array(
                          'class'=>'form-control',
                          'placeholder'=>'Tax Id',
                          'id' => 'company_tax_id',
                          )) !!}
                    <span class="fa fa-info form-control-feedback right" aria-hidden="true"></span>
                    <span class="text-danger">{!! $errors->getBag('default')->first('company_tax_id') !!}</span>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    {!! FORM::text('company_reg_com', null ,
                     array(
                          'class'=>'form-control has-feedback-left',
                          'placeholder'=>'Registration Number',
                          'id' => 'company_reg_com',
                          )) !!}
                    <span class="fa fa-info form-control-feedback left" aria-hidden="true"></span>
                    <span class="text-danger">{!! $errors->getBag('default')->first('company_reg_com') !!}</span>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    {!! FORM::text('phone', null ,
                     array(
                          'class'=>'form-control',
                          'placeholder'=>'Phone',
                          'id' => 'phone',
                          )) !!}
                    <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                    <span class="text-danger">{!! $errors->getBag('default')->first('phone') !!}</span>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    {!! FORM::text('company_bank_account', null ,
                     array(
                          'class'=>'form-control has-feedback-left',
                          'placeholder'=>'Bank Account',
                          'id' => 'company_bank_account',
                          )) !!}
                    <span class="fa fa-bank form-control-feedback left" aria-hidden="true"></span>
                    <span class="text-danger">{!! $errors->getBag('default')->first('company_bank_account') !!}</span>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    {!! FORM::text('company_country', null ,
                     array(
                          'class'=>'form-control',
                          'placeholder'=>'Country',
                          'id' => 'company_country',
                          )) !!}
                    <span class="fa fa-location-arrow form-control-feedback right" aria-hidden="true"></span>
                    <span class="text-danger">{!! $errors->getBag('default')->first('company_country') !!}</span>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    {!! FORM::text('company_state', null ,
                     array(
                          'class'=>'form-control has-feedback-left',
                          'placeholder'=>'State',
                          'id' => 'company_state',
                          )) !!}
                    <span class="fa fa-location-arrow form-control-feedback left" aria-hidden="true"></span>
                    <span class="text-danger">{!! $errors->getBag('default')->first('company_state') !!}</span>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    {!! FORM::text('company_city', null ,
                     array(
                          'class'=>'form-control',
                          'placeholder'=>'City',
                          'id' => 'company_city',
                          )) !!}
                    <span class="fa fa-location-arrow form-control-feedback right" aria-hidden="true"></span>
                    <span class="text-danger">{!! $errors->getBag('default')->first('company_city') !!}</span>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Address  <span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        {!! FORM::textarea('company_address', null ,
                    array(
                         'class'=>'form-control',
                         'rows' => '3',
                         'placeholder'=>'Address',
                         'id' => 'company_address',
                         )) !!}
                        <span class="text-danger">{!! $errors->getBag('default')->first('company_address') !!}</span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-sm-offset-3 col-md-offset-3 text-center">
                        {!! FORM::submit('Save',array(
                               'class' => 'btn btn-default'
                        )) !!}
                    </div>
                </div>
                {!! FORM::close() !!}
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xs-12">
        @if ($logo)
        <div class="x_panel">

            <div class="x_content text-center">
               {{ HTML::image('administrare/src/logos/'.$logo) }}
            </div>
        </div>
        @endif
        <div class="x_panel">
            <div class="x_title">
                <h2>Upload your logo</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />

                {!! Form::open(array(
                        'action'=> 'admin\ProcessFormController@logo' ,
                        'class' => 'form-horizontal form-label-left input_mask',
                        'enctype' => 'multipart/form-data',
                        'method' => 'put'
                        )) !!}

                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                <div class="col-md-8 col-sm-8 col-xs-12 form-group has-feedback">
                    {!!  Form::file('logo',array(
                    'id'=>'logo',
                    'class'=>'form-control hidden'
                    )) !!}

                    {!!  Form::text('photoCover',null,array(
                    'id'=>'photoCover',
                    'class'=>'form-control'
                    )) !!}



                    <span class="text-danger" id="alerta">{!! $errors->getBag('default')->first('logo') !!}</span>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                    <a class="btn" id="browse" onclick="$('input[id=logo]').click();">Browse</a>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-sm-offset-3 col-md-offset-3 text-center">
                        {!! FORM::submit('Save',array(
                               'class' => 'btn btn-default'
                        )) !!}
                    </div>
                </div>
                    {!! FORM::close() !!}
                <script type="text/javascript">
                    $('#browse').click(function() {
                        $('#alerta').empty();
                    });
                    $('input[id=logo]').change(function() {


                        $('#photoCover').val($(this).val());
                        if(this.files[0].size/ 1024 > 1024){
                            $("#alerta").append("<b>File size must be under 1024kb</b>");
                            $('#logo').val('');
                            $('#photoCover').val('');
                        }
                    });
                </script>
            </div>
        </div>
    </div>
        </div>







 @endsection
