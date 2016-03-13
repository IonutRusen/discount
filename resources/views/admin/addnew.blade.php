<?php
$ramase = $nrTotal -  $cupoanefolosite;
?>
@extends('admin.master')
@section('title')
    Your Profile
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Add Coupon(s)</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    {!! FORM::open(array(
                            'class' => 'form-horizontal form-label-left input_mask',
                            'action' => 'admin\AddnewSimpleVoucher@addnew'
                        )) !!}

                        <div class="form-group">
                            {!! FORM::label('coupons','No of coupons',array(
                                'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                            )) !!}

                            <div class="col-md-3 col-sm-3 col-xs-12">
                                {!! FORM::number('coupons_no',1, array(
                                    'class' => 'form-control nolineheight',
                                    'min' => '1',
                                    'max' =>  $ramase,
                                    'id' => 'coupons_no'
                                )) !!}
                                <span class="text-danger">{!! $errors->getBag('default')->first('coupons_no') !!}</span>
                            </div>
                            <span class="text-danger"><strong>*Set a value only if you want to generate more
coupons with the same code.</strong></span>
                        </div>

                        <div class="form-group">
                            {!! FORM::label('value','Value',array(
                                'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                            )) !!}
                            <div class="col-md-3 col-sm-3 col-xs-12">

                                {!! Form::text('value',old('value'),array(
                                    'class' => 'form-control',
                                    'placeholder' => 'Value',


                                ))
                                !!}
                                <span class="text-danger">{!! $errors->getBag('default')->first('value') !!}</span>
                            </div>

                            <div class="col-md-6 col-sm-4 col-xs-12">
                                {!! FORM::label('percent','Percent',array(
                              'class' => 'control-label',

                               )) !!}
                                {!! FORM::radio('type','1', array(
                                    'class' => 'radio-inline',
                                    'id' => 'percent'
                                )) !!}

                                {!! FORM::label('amount','Amount',array(
                              'class' => 'control-label',

                               )) !!}
                                {!! FORM::radio('type','0', false,array(
                                    'class' => 'radio-inline',
                                    'id' => 'amount',

                                )) !!}

                            </div>

                        </div>


                            <div class="form-group">
                                {!! FORM::label('couponcode','Coupon Code',array(
                                    'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                                )) !!}
                                <div class="col-md-3 col-sm-3 col-xs-12">

                                    {!! FORM::text('couponcode',old('couponcode'),array(
                                        'class' => 'form-control',

                                    )) !!}
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-3 col-sm-3 col-xs-12"></div>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <span class="text-danger">{!! $errors->getBag('default')->first('couponcode') !!}</span>
                                        <br/><span class="btn-primary btn-sm " onclick="generate()">Generate</span>
                                        <span class="help-block">If you don't have your own voucher code, we can generate it for you.</span>

                                    </div>

                                </div>
                            </div>


                        <div class="form-group">

                            {!! FORM::label('category','Category',array(
                                'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                            )) !!}
                            <div class="col-md-3 col-sm-9 col-xs-12">

                                {!! Form::select('category',$category, null,
                                array(
                                    'class' => 'select2_single form-control',


                                ))
                                !!}
                                <span class="text-danger">{!! $errors->getBag('default')->first('category') !!}</span>
                            </div>
                            <span class="help-block">Category in which your voucher will be served.</span>
                        </div>



                    <div class="form-group">

                            {!! FORM::label('locationfilter','Location Filter',array(
                           'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                       )) !!}
                            <div class="col-md-3 col-sm-3 col-xs-12">

                                {!! Form::select('location',$locations, old('location'),
                                array(
                                    'class' => 'select2_single form-control',


                                ))
                                !!}
                                <span class="text-danger">{!! $errors->getBag('default')->first('location') !!}</span>
                            </div>
                            <span class="help-block">*In which area your voucher will be served</span>
                        </div>


                    @if ($age_filter == 0)
                    @else


                    <div class="form-group">

                        {!! FORM::label('agefilter','Age Filter',array(
                            'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                        )) !!}
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            {!! Form::select('agefilter',$agefilter, null,
                                array(
                                    'class' => 'select2_single form-control',


                                ))
                                !!}

                        </div>
                        <span class="help-block">*Reach people of specific demographics by age targeting</span>
                    </div>
                    @endif
                    @if ($gender_filter == 0)
                    @else

                    <div class="form-group">

                        {!! FORM::label('genderfilter','Gender Filter',array(
                            'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                        )) !!}
                        <div class="col-md-3 col-sm-3 col-xs-12">

                            {!! Form::select('genderfilter', array(
                                'all' => 'All',
                                 'm' => 'Male',
                                 'f' => 'Female',
                            ), null,
                            array(
                                'class' => 'select2_single form-control',
                            ))
                            !!}
                        </div>
                        <span class="help-block">*Reach people of specific demographics by gender targeting</span>
                    </div>
                    @endif
                    <div class="form-group">
                        {!! FORM::label('description','Description',array(
                            'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                        )) !!}
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            {!! FORM::textarea('description', old('description'),array(
                                'class' => 'form-control',
                                'rows'  => '3',
                                'maxlength' => '150',
                                'placeholder' => 'Ex : Exclusive online, valid only for laptops .....'

                            )) !!}
                            <span class="text-danger">{!! $errors->getBag('default')->first('description') !!}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        {!! FORM::label('validity','Valid Until',array(
                            'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                        )) !!}
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            {!! FORM::date('validity',null,array(
                                'class' => 'form-control',


                            )) !!}

                        </div>
                        <span class="help-block">* If your promotion has an end date, you can set it from here</span>
                    </div>






                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">

                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>

                    {!! FORM::close() !!}
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="row top_tiles">
                <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                        <div class="count">{{ $nrTotal }}</div>
                        <div class="icon"><i class="fa fa-tag"></i>
                        </div>


                        <h5 class="text-center">Total Coupons</h5>

                    </div>
                </div>
                <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                        <div class="count">{{$ramase }} </div>
                        <div class="icon"><i class="fa fa-tag"></i>
                        </div>


                        <h5 class="text-center">Remaining Coupons<br> Until {{ Carbon\Carbon::parse($cicle)->format('d-M-Y')}}</h5>

                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
@section('customscript')
<script>
    function randomString() {
        var chars = "ABCDEFGHIJKLMNOPQRSTUWXYZ1234567890";
        var pass = "";
        for (var x = 0; x < 10; x++) {
            var i = Math.floor(Math.random() * chars.length);
            pass += chars.charAt(i);
        }
        return pass;
    }

    function generate() {
        couponcode.value = randomString();
    }


</script>
@endsection
