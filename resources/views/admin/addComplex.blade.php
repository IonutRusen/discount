
@extends('admin.master')
@section('title')
    Your Profile
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Add Coupon(s)</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    {!! FORM::open(array(
                        'class' => 'form-horizontal form-label-left'

                    )) !!}
                    @if ($NrComplexVoucher == 0)
                    @else
                        <div class="form-group">
                            {!! FORM::label('noofsteps','No of steps',array(
                                'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                            )) !!}

                            <div class="col-md-3 col-sm-3 col-xs-12">
                                {!! FORM::number('noofsteps',1, array(
                                    'class' => 'form-control nolineheight',
                                    'min' => '1',
                                    'max' => '5'
                                )) !!}

                            </div>
                            <span class="help-block">*How many steps for your complex voucher</span>
                        </div>
                    @endif
                    <div class="form-group">
                        {!! FORM::label('coupons','No of coupons',array(
                            'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                        )) !!}

                        <div class="col-md-3 col-sm-3 col-xs-12">
                            {!! FORM::number('coupons',1, array(
                                'class' => 'form-control nolineheight',
                                'min' => '1',
                                'max' =>  $nrTotal
                            )) !!}

                        </div>
                            <span class="text-danger"><strong>*Set a value only if you want to generate more
                                    coupons with the same code.</strong></span>
                    </div>

                    <div class="form-group">
                        {!! FORM::label('valuestep','Value Step',array(
                            'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                        )) !!}
                        <div class="col-md-3 col-sm-3 col-xs-12">

                            {!! Form::text('valuestep',null,array(
                                'class' => 'form-control',
                                'placeholder' => 'Value',


                            ))
                            !!}
                        </div>
                        <div class="col-md-6 col-sm-4 col-xs-12">
                            {!! FORM::label('percent','Percent',array(
                          'class' => 'control-label',

                           )) !!}
                            {!! FORM::radio('type','percent', array(
                                'class' => 'radio-inline',
                                'id' => 'percent'
                            )) !!}

                            {!! FORM::label('amount','Amount',array(
                          'class' => 'control-label',

                           )) !!}
                            {!! FORM::radio('type','amount', false,array(
                                'class' => 'radio-inline',
                                'id' => 'amount',

                            )) !!}

                        </div>

                    </div>
                    <div class="form-group">
                        {!! FORM::label('couponcode','Coupon Code',array(
                            'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                        )) !!}
                        <div class="col-md-9 col-sm-9 col-xs-12">

                            {!! FORM::text('couponcode',null,array(
                                'class' => 'form-control',

                            )) !!}
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="col-md-3 col-sm-3 col-xs-12"></div>
                            <div class="col-md-9 col-sm-9 col-xs-12">

                                <br/><span class="btn-primary btn-sm " onclick="generate()">Generate</span>
                                <span class="help-block">If you don't have your own voucher code, we can generate it for you.</span>

                            </div>

                        </div>
                    </div>

                    <div class="form-group">

                        {!! FORM::label('category','Category',array(
                            'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                        )) !!}
                        <div class="col-md-9 col-sm-9 col-xs-12">

                            {!! Form::select('category',$category, null,
                            array(
                                'class' => 'select2_single form-control',


                            ))
                            !!}
                            <span class="help-block">Category in which your voucher will be served.</span>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12"></div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <h3>Location Filter</h3>
                        <span class="help-block">*In which area your voucher will be served</span>
                    </div>

                    @if ($age_filter == 0)
                    @else
                        <div class="col-md-3 col-sm-3 col-xs-12"></div>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <h3>Age Filter</h3>
                            <span class="help-block">*Reach people of specific demographics by age targeting</span>
                        </div>

                        <div class="form-group">

                            {!! FORM::label('agefilter','Age Filter',array(
                                'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                            )) !!}
                            <div class="col-md-9 col-sm-9 col-xs-12">

                                {!! Form::select('agefilter', array(

                                     '18' => '18-24',
                                     '25' => '25-34',
                                     '35' => '35-44',
                                     '45' => '45-54',
                                     '55' => '55-64',
                                     '55' => '55-64',
                                     '65' => '65 or more'


                                ), null,
                                array(
                                    'class' => 'select2_single form-control',
                                    'multiple' => 'multiple'

                                ))
                                !!}
                            </div>
                        </div>
                    @endif
                    @if ($gender_filter == 0)
                    @else
                        <div class="col-md-3 col-sm-3 col-xs-12"></div>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <h3>Gender Filter</h3>
                            <span class="help-block">*Reach people of specific demographics by gender targeting</span>
                        </div>
                        <div class="form-group">

                            {!! FORM::label('genderfilter','Gender',array(
                                'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                            )) !!}
                            <div class="col-md-9 col-sm-9 col-xs-12">

                                {!! Form::select('genderfilter', array(
                                    '' => 'Please select',
                                     'm' => 'Male',
                                     'f' => 'Female',
                                ), null,
                                array(
                                    'class' => 'select2_single form-control',


                                ))
                                !!}
                            </div>
                        </div>
                    @endif







                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-primary">Cancel</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                    {!! FORM::close() !!}
                </div>
            </div>
        </div>


    </div>
@endsection
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
    $(document).on("change","#coupons_no",function(e)
    {
        $("#cupoane").empty();
        steps = CreateSteps($("#coupons_no").val());
    });
    function CreateSteps(nrSteps)
    {
        var data = "";
        for (var i = 1; i <= nrSteps; i++)
        {
            $("#cupoane").append("mata");
        }
    }
</script>

