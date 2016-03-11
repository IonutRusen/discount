<div class="form-group">
    {!! FORM::label('country','Name *',array(
        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
    )) !!}
    <div class="col-md-9 col-sm-9 col-xs-12">
        {!! FORM::text('location_name',null,array(
       'class' => 'form-control'
   )) !!}
   <span class="text-danger">{!! $errors->getBag('default')->first('location_name') !!}</span>
    </div>
</div>
<div class="form-group">


    {!! FORM::label('country','Country *',array(
        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
    )) !!}
    <div class="col-md-9 col-sm-9 col-xs-12">

        {!! Form::select('country',$country, null,
            array(
                'class' => 'select2_single form-control',


            ))
            !!}
        <span class="text-danger">{!! $errors->getBag('default')->first('country') !!}</span>
        <span class="text-info"><i class="fa fa-info-circle"></i> Country in which your coupons will be active</span>
    </div>
</div>
@if( $NrLocatii == 1)
@else
    <div class="form-group">

        {!! FORM::label('state','State / County',array(
            'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
        )) !!}
        <div class="col-md-9 col-sm-9 col-xs-12">

            {!! Form::select('state', array(

            '' => 'Select State'), null,
            array(
                'class' => 'select2_single form-control',


            ))
            !!}
            <span class="text-info"><i class="fa fa-info-circle"></i> State/County in which your coupons will be active. You can narrow down the geographical area by selecting the state/county in wich your coupons will be served</span>
        </div>
    </div>
    <div class="form-group">

        {!! FORM::label('city','City',array(
            'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
        )) !!}
        <div class="col-md-9 col-sm-9 col-xs-12">

            {!! Form::select('city[]', array(

            '' => 'Select Country and State first'), null,
            array(
                'class' => 'select2_single form-control',
                'multiple' => 'multiple',
                'id' => 'city'

            ))
            !!}
            <span class="text-info"><i class="fa fa-info-circle"></i> City(cities) in which your coupons will be active. You can narrow down the geographical area by selecting the city(cities) in wich your coupons will be served. CTRL + CLICK to select multiple options</span>
        </div>
        </div>
@endif