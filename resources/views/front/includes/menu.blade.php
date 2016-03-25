<div class="menu">
    <div >
        <img alt="" src="frontEnd/assets/img/about.jpg" style="width:100%; height:100%;">
        <div class="mask">
        </div>
        <div class="heading">
            <i class="ion-ios-pricetag hidden-xs-down hidden-md-down"></i>
            <h2 class="hidden-xs-down hidden-md-down">Play & WIN</h2>
            {{ FORM::open(array(

                            'action' => 'front\GetAndServeCoupon@getCouponsByCutomerCountry'
                        )) }}
            <div class="form-group col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
                    {{ Form::select('category',$categorii, null,
                    array(
                        'class' => 'select2_single form-control',
                    ))
                    }}


            </div>
            <div class="form-group col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
                {!! FORM::submit('Choose') !!}
            </div>
            {{ FORM::close() }}
        </div>
    </div>

    <!-- Single Navigation Menu Button -->

    <div  class="menu_button">
        <img alt="" src="frontEnd/assets/img/portfolio.jpg">
        <div class="mask">
        </div>

        <div class="heading">
            <a href="/profile">
            <i class="ion-person hidden-xs"></i>
            <h2>Pofile</h2></a>
        </div>
    </div>

    <!-- Single Navigation Menu Button [ END ]  -->

    <div  class=" menu_button">
        <img alt="" src="frontEnd/assets/img/service.jpg">
        <div class="mask">
        </div>
        <div class="heading">
            <i class="ion-ios-lightbulb-outline hidden-xs"></i>
            <h2>Services</h2>
        </div>
    </div>

    <!-- Single Navigation Menu Button [ END ]  -->

    <div  class="menu_button">
        <img alt="" src="frontEnd/assets/img/contact.jpg">
        <div class="mask">
        </div>
        <div class="heading">
            <i class="ion-ios-chatboxes-outline hidden-xs"></i>
            <h2>Contact</h2>
        </div>
    </div>

    <!-- Single Navigation Menu Button [ END ]  -->

</div>
