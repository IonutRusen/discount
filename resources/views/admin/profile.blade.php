
@extends('admin.master')
@section('title')
    Your Profile
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12 col-xs-12">
            <div class="col-sm-6 col-xs-12">

                <div class="col-sm12 col-xs-12">
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
                </div><!--end profile-->
                <div class="col-sm12 col-xs-12">
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
                </div><!--end logo-->
            </div><!--end left-->
            <div class="col-sm-6 col-xs-12">
                <div class="col-sm-12 col-xs-12">
                    <div class="x_panel">
                        @if(Session::has('message'))
                            <p class="alert alert-danger">{{ Session::get('message') }}</p>
                        @endif
                        <div class="x_title">
                            <h2>Add Location</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            @if ( $nrLocatiiActive >= $NrLocatii )
                                <h4 class="text-warning text-center">Maximum number of locations have been reached</h4>
                            @else
                                {!! FORM::open( array(
                                        'class' => 'form-horizontal form-label-left input_mask',
                                        'action' => 'admin\ProcessFormController@saveLocation'
                                    )) !!}
                                @include('admin.formCountry')
                                <div class="col-md-12 col-sm-12 col-xs-12"><br/>
                                    {!! FORM::label(null,null,array(
                                            'class' => 'control-label col-md-4 col-sm-4 col-xs-12'
                                    )) !!}
                                    {!! Form::submit('Submit', array(
                                        'class' => 'btn btn-success'
                                    ))
                                    !!}
                                </div>
                                {!! FORM::close() !!}
                            @endif
                        </div>

                    </div>
                </div><!--end locations-->
                <div class="col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Locations</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <?php $i = 1; ?>
                                @foreach($locations as $location)
                                    <tr>
                                        <td>
                                            {{ $i }}
                                        </td>
                                        <td>
                                            {{ $location['name'] }}
                                        </td>
                                        <td>
                            <span data-toggle="tooltip" data-placement="top" title="Edit location">
                            <i class="fa fa-edit text-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="{{ $location['id'] }}"></i></span>
                                            <a href="deletelocation/{{ $location['id'] }}" data-toggle="tooltip" data-placement="top" title="Delete Location">
                                                <i class="fa fa-times text-danger"></i></a>
                                        </td>

                                        <?php $i++ ?>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--end right-->
    </div><!--end container-->
    </div>


@endsection
@section('customscript')

    <script type="text/javascript">

        //AJAX MODAL
        $(document).ready(function(){
            $('#country1').change(function(){

                $.ajax({
                    url: 'ajax/state',
                    type: "get",

                    data: {id: $('#country1 option:selected').val()},
                    success: function(data){

                        var $state = $("#state1");
                        var $city = $("#city1");
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
            $('#state1').change(function(){

                $.ajax({
                    url: 'ajax/city',
                    type: "get",

                    data: {id: $('#state1 option:selected').val()},
                    success: function(data){

                        var $city = $("#city1");
                        $city.empty();
                        $.each(data,function(idx, obj) {

                            $city.append('<option value="' + obj.id +'">' + obj.name + '</option>');
                        });

                    }
                });
            });
        });
        //END AJAX MODAL
        //AJAX NORMAL
        $(document).ready(function(){
            $('#country').change(function(){

                $.ajax({
                    url: 'ajax/state',
                    type: "get",

                    data: {id: $('#country option:selected').val()},
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
                    url: 'ajax/city',
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



        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            // var recipient = button.data('whatever') // Extract info from data-* attributes
            $.ajax({
                url: 'ajax/locatinoid',
                type: "get",

                data: {id: button.data('whatever')},
                success: function(data){


                    $('.modal-body #location_name_modal').val(data['0'].name);
                    $('.modal-body #location_id').val(data['0'].id);

                }
            });



        })
    </script>
@endsection
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">New message</h4>
            </div>
            <div class="modal-body">
                {!! FORM::open(array(
                            'class' => 'form-horizontal form-label-left input_mask',
                            'action' => 'admin\ProcessFormController@editLocation'
                        )) !!}
                {!! FORM::hidden('location_id',null,array(
                        'id' => 'location_id'
                )) !!}

                <div class="form-group">
                    {!! FORM::label('location_name','Location Name',array(
                        'class' => 'control-label col-md-3 col-sm-3 col-xs-12',

                    )) !!}
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        {!! FORM::text('location_name',null,array(
                       'class' => 'form-control',
                        'id' => 'location_name_modal'
                   )) !!}
                    </div>

                </div>
                <div class="form-group">


                    {!! FORM::label('country1','Country',array(
                        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                    )) !!}
                    <div class="col-md-9 col-sm-9 col-xs-12">

                        {!! Form::select('country1',$country, null,
                            array(
                                'class' => 'select2_single form-control',


                            ))
                            !!}
                    </div>

                </div>
                @if( $NrLocatii == 1)
                @else
                    <div class="form-group">

                        {!! FORM::label('state1','State / County',array(
                            'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                        )) !!}
                        <div class="col-md-9 col-sm-9 col-xs-12">

                            {!! Form::select('state1', array(

                            '' => 'Select State'), null,
                            array(
                                'class' => 'select2_single form-control',


                            ))
                            !!}
                        </div>
                    </div>
                    <div class="form-group">

                        {!! FORM::label('city1','City',array(
                            'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                        )) !!}
                        <div class="col-md-9 col-sm-9 col-xs-12">

                            {!! Form::select('city1[]', array(

                            '' => 'Select Country and State first'), null,
                            array(
                                'class' => 'select2_single form-control',
                                'multiple' => 'multiple',
                                'id' => 'city1'

                            ))
                            !!}
                        </div>
                    </div>
                @endif
                <div class="modal-footer">
                    <div class="form-group">
                        {{ FORM::submit('Save',array(
                            'class' => 'btn btn-primary',

                        )) }}
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                {{FORM::close()}}
            </div>


        </div>
    </div>
</div> <!--end sm-12-->
</div> <!--end row-->
