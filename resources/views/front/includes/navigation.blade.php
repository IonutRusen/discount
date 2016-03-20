@extends('admin.master')
@section('menu')
<div class="menu">
    <div >
        <img alt="" src="frontEnd/assets/img/about.jpg" style="width:100%; height:100%;">
        <div class="mask">
        </div>
        <div class="heading">
            <i class="ion-ios-pricetag hidden-xs"></i>
            <h2>Play & WIN</h2>
        </div>
    </div>

    <!-- Single Navigation Menu Button -->

    <div data-url_target="profile" class="portfolio-btn menu_button">
        <img alt="" src="frontEnd/assets/img/portfolio.jpg">
        <div class="mask">
        </div>
        <div class="heading">
            <i class="ion-person hidden-xs"></i>
            <h2>Pofile</h2>
        </div>
    </div>

    <!-- Single Navigation Menu Button [ END ]  -->

    <div data-url_target="service" class="service-btn menu_button">
        <img alt="" src="frontEnd/assets/img/service.jpg">
        <div class="mask">
        </div>
        <div class="heading">
            <i class="ion-ios-lightbulb-outline hidden-xs"></i>
            <h2>Services</h2>
        </div>
    </div>

    <!-- Single Navigation Menu Button [ END ]  -->

    <div data-url_target="contact" class="contact-btn menu_button">
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
    @endsection