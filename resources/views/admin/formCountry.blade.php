<div class="form-group">
    {!! FORM::label('country','Location Name',array(
        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
    )) !!}
    <div class="col-md-9 col-sm-9 col-xs-12">
        {!! FORM::text('location_name',null,array(
       'class' => 'form-control'
   )) !!}
    </div>
</div>
<div class="form-group">


    {!! FORM::label('country','Country',array(
        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
    )) !!}
    <div class="col-md-9 col-sm-9 col-xs-12">

        {!! Form::select('country',$country, null,
            array(
                'class' => 'select2_single form-control',


            ))
            !!}
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
        </div>
        </div>
@endif