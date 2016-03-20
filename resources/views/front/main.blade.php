
@section('title')
    Customer Dashboard
@endsection
@include('front.header')

<!-- Preloader -->

<div id="preloader">
    <div class="loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>

<!-- home-page -->

<div class="home-page">

    <!-- Introduction -->

    <div class="introduction">
        <!-- <div class="mask">
        </div> -->
        <div class="intro-content col-md-12">



        <div class="row">
            <div class="col-md-10 col-md-offset-1" id="scratch-container">
                <canvas class="canvas img-responsive" id="scratch-canvas"></canvas>
                <div id="mata" class="col-md-12 col-xs-12 col-sm-12">
                    <h2 >WINNER!!</h2>
                    <h3>Your code is:</h3>
                    <h1>AbC12dEf</h1>
                </div>
            </div>
        </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
            <div class="row">

            <div class="col-md-2 col-sm-2 col-sm-12"></div>
            <div class="col-md-12 col-sm-12 col-sm-12">
                <div class="social-media hidden-xs">
                    <a href="#" class="fa fa-facebook"  title="Facebook"></a>
                    <a href="#" class="fa fa-twitter"  title="Twitter"></a>
                    <a href="#" class="fa fa-plus"  title="Google+"></a>
                    <a href="#" class="fa fa-linkedin"  title="Linkedin"></a>
                    <a href="#" class="fa fa-behance"  title="Behance"></a>
                    <a href="#" class="fa fa-flickr"  title="Flicker"></a>
                    <a href="#" class="fa fa-instagram"  title="Instagram"></a>
                </div>
            </div>
            </div>
        </div>

        <!-- Social Media Icons [ END ] -->
    </div>

    <!-- Navigation Menu -->

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
</div>

<!--
4 ) Close Button
-->

<div class="close-btn"></div>

<!--
5 ) Profile Page
-->

<div id="about_us" class="profile-page container-fluid page">
    <div class="row">
        <!--( a ) Profile Page Fixed Image Portion -->

        <div class="image-container col-md-3 col-sm-12">
            <div class="mask">
            </div>
            <div class="main-heading">
                <h1>About us</h1>
            </div>
        </div>

        <!--( b ) Profile Page Content -->

        <div class="content-container col-md-9 col-sm-12">

            <!--( A ) Story of Glory -->

            <div class="clearfix">
                <h2 class="small-heading">LEARN ABOUT US</h2>
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 col-xs-10 col-xs-offset-1">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="video embed-responsive embed-responsive-4by3">

                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <div class="about-us-desc">
                                    <p>
                                        Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor
                                    </p>
                                    <p>
                                        Faliquam hendrerit a augue in suscipit. Pellen tesque id erat quis sapien a dignissim sollicitu din. Nulla B-4 mattis tortor sit amet lorem dolor  amer sollicitudin aliquam dignissim so much.
                                        Ut cursus massa at urnaac assin got pressed hadrtits lis estie. Sed aliquamellus tae ultrices condimentum, the Bootstrap 4 leo massa mollis estiegittis miristum nu endrerit a augue in su cipit.Pe lla eo massa mlli joss mama.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--( B ) What Can I Do -->

            <div class="clearfix">
                <h2 class="small-heading">OUR FUN FACTS</h2>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-xs-12">
                        <div class="row">
                            <div class="services col-md-4  col-xs-12">
                                <div class="facts">
                                    <div class="facts-overlay">
                                        <i class="fa fa-code fa-3x"></i>
                                        <p class="count">1956628</p>
                                        <p class="text-capitalize">lines of code</p>
                                    </div>

                                </div>
                            </div>

                            <!-- Single Service Item [ END ]  -->

                            <div class="services col-md-4  col-xs-12">
                                <div class="facts">
                                    <div class="facts-overlay">
                                        <i class="fa fa-coffee fa-3x"></i>
                                        <p class="count">1473</p>
                                        <p class="text-capitalize">cups of coffee</p>
                                    </div>

                                </div>
                            </div>

                            <!-- Single Service Item [ END ]  -->

                            <div class="services col-md-4  col-xs-12">
                                <div class="facts">
                                    <div class="facts-overlay">
                                        <i class="fa fa-cubes fa-3x"></i>
                                        <p class="count">500</p>
                                        <p class="text-capitalize">projects delivered</p>
                                    </div>

                                </div>
                            </div>

                            <!-- Single Service Item [ END ]  -->
                        </div>
                    </div>
                </div>
            </div>


            <div class="clearfix full-height">
                <h2 class="small-heading">MEET THE TEAM</h2>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                        <div class="row">
                            <div class="col-md-4 col-xs-12">
                                <div class="team-member-box center-block text-center">
                                    <img src="frontEnd/assets/img/team_member1.jpg" class="img-responsive">
                                    <h4 class="text-capitalize">loras tyrel</h4>
                                    <p class="text-uppercase">founder and ceo</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="team-member-box center-block text-center">
                                    <img src="frontEnd/assets/img/team_member2.jpg" class="img-responsive">
                                    <h4 class="text-capitalize">john snow</h4>
                                    <p class="text-uppercase">head of attorney</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="team-member-box center-block text-center">
                                    <img src="frontEnd/assets/img/team_member3.jpg" class="img-responsive">
                                    <h4 class="text-capitalize">sansa stark</h4>
                                    <p class="text-uppercase">creative coder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>


<div id="profile" class="portfolio-page container-fluid page">

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
                <h2 class="small-heading">Profile</h2>

                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                        <div class="project-container">
                            @include('front.profile')
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>

<!--
7 ) Service Page
-->

<div id="service" class="service-page container-fluid page">
    <div class="row">
        <!--( a ) Portfolio Page Fixed Image Portion -->

        <div class="image-container col-md-3 col-sm-12">
            <div class="mask">
            </div>
            <div class="main-heading">
                <h1>Service</h1>
            </div>
        </div>

        <!--( b ) Portfolio Page Content -->

        <div class="content-container col-md-9 col-sm-12">

            <!--( A ) Portfolio -->

            <div class="clearfix">
                <h2 class="small-heading">WHAT WE DO BEST</h2>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12">
                        <div class="row">

                            <div class="col-md-4 col-sm-12">
                                <div class="faq-desc-item">
                                    <div class="flip-container text-center" ontouchstart="this.classList.toggle('hover');">
                                        <div class="flipper">
                                            <div class="front">
                                                <i class="fa fa-mobile"></i>
                                                <h5>Applications</h5>
                                            </div>
                                            <div class="back">
                                                <h5>Applications</h5>
                                                <p>Mozilla Web Developer, MooTools &amp; jQuery Consultant, MooTools Core Developer, Javascript Fanatic, CSS Tinkerer, PHP Hacker, and web lover.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="faq-desc-item">
                                    <div class="flip-container text-center" ontouchstart="this.classList.toggle('hover');">
                                        <div class="flipper">
                                            <div class="front">
                                                <i class="fa fa-lightbulb-o"></i>
                                                <h5>Productions</h5>
                                            </div>
                                            <div class="back">
                                                <!-- <i class="fa fa-lightbulb-o fa-fw"></i> -->
                                                <h5>Productions</h5>
                                                <p>Mozilla Web Developer, MooTools &amp; jQuery Consultant, MooTools Core Developer, Javascript Fanatic, CSS Tinkerer, PHP Hacker, and web lover.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="faq-desc-item">
                                    <div class="flip-container text-center" ontouchstart="this.classList.toggle('hover');">
                                        <div class="flipper">
                                            <div class="front">
                                                <i class="fa fa-paint-brush"></i>
                                                <h5>Web Designing</h5>
                                            </div>
                                            <div class="back">
                                                <!-- <i class="fa fa-paint-brush fa-fw"></i> -->
                                                <h5>Web Designing</h5>
                                                <p>Mozilla Web Developer, MooTools &amp; jQuery Consultant, MooTools Core Developer, Javascript Fanatic, CSS Tinkerer, PHP Hacker, and web lover.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



            <div class="clearfix">
                <h2 class="small-heading">CHOSSE YOUR PLAN</h2>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12 price-catagory">
                                <div class="price-box">
                                    <p class="pricing-catagory-name">Basic</p>
                                    <p><span class="price">$19</span>/Month</p>
                                    <ul>
                                        <li>15 Projects</li>
                                        <li>30 GB Storage</li>
                                        <li class="unavailabe">Unlimited Data Transfer</li>
                                        <li class="unavailabe">50 GB Bandwith</li>
                                        <li class="unavailabe">Enhanced Security</li>
                                    </ul>

                                    <a href="#" class="btn">learn more</a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 price-catagory">
                                <div class="price-box">
                                    <p class="pricing-catagory-name">Business</p>
                                    <p><span class="price">$29</span>/Month</p>
                                    <ul>
                                        <li>15 Projects</li>
                                        <li>30 GB Storage</li>
                                        <li>Unlimited Data Transfer</li>
                                        <li class="unavailabe">50 GB Bandwith</li>
                                        <li class="unavailabe">Enhanced Security</li>
                                    </ul>

                                    <a href="#" class="btn">learn more</a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 price-catagory">
                                <div class="price-box">
                                    <p class="pricing-catagory-name">Premium</p>
                                    <p><span class="price">$39</span>/Month</p>
                                    <ul>
                                        <li>15 Projects</li>
                                        <li>30 GB Storage</li>
                                        <li>Unlimited Data Transfer</li>
                                        <li>50 GB Bandwith</li>
                                        <li class="unavailabe">Enhanced Security</li>
                                    </ul>

                                    <a href="#" class="btn">learn more</a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 price-catagory">
                                <div class="price-box">
                                    <p class="pricing-catagory-name">Ultimate</p>
                                    <p><span class="price">$49</span>/Month</p>
                                    <ul>
                                        <li>15 Projects</li>
                                        <li>30 GB Storage</li>
                                        <li>Unlimited Data Transfer</li>
                                        <li>50 GB Bandwith</li>
                                        <li>Enhanced Security</li>
                                    </ul>

                                    <a href="#" class="btn">learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: pricing section -->


            <div class="clearfix full-height">
                <h2 class="small-heading">OUR VALUABLE CLIENTS</h2>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                        <div id="sponsor-list" class="owl-carousel owl-theme">

                            <div class="item">
                                <img src="frontEnd/assets/img/sponsor1.png" alt="sponsor1" class="center-block" style="width: 165px; height: 127px;">
                            </div>

                            <div class="item">
                                <img src="frontEnd/assets/img/sponsor2.png" alt="sponsor2" class="center-block" style="width: 165px; height: 127px;">
                            </div>

                            <div class="item">
                                <img src="frontEnd/assets/img/sponsor3.png" alt="sponsor3" class="center-block" style="width: 165px; height: 127px;">
                            </div>

                            <div class="item">
                                <img src="frontEnd/assets/img/sponsor4.png" alt="sponsor4" class="center-block" style="width: 165px; height: 127px;" >
                            </div>

                            <div class="item">
                                <img src="frontEnd/assets/img/sponsor5.png" alt="sponsor5" class="center-block" style="width: 165px; height: 127px;">
                            </div>

                            <div class="item">
                                <img src="frontEnd/assets/img/sponsor6.png" alt="sponsor6" class="center-block" style="width: 165px; height: 127px;">
                            </div>

                        </div> <!--  / #sponsor-list /.owl-carousel -->
                    </div>
                </div>
            </div>
            <!-- end: valuable clients -->





        </div>
    </div>
</div>

<!--
8 ) Contact Page
-->

<div id="contact" class="contact-page container-fluid page">
    <div class="row">
        <!--( a ) Contact Page Fixed Image Portion -->

        <div class="image-container col-md-3 col-sm-12">
            <div class="mask">
            </div>
            <div class="main-heading">
                <h1>contact</h1>
            </div>
        </div>

        <!--( b ) Contact Page Content -->

        <div class="content-container col-md-9 col-sm-12">

            <!--( A ) Contact Form -->

            <div class="clearfix full-height">
                <h2 class="small-heading">COME IN TOUCH</h2>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                        <div class="contact-info">


                        </div>

                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

@include('front.footer')
    <script>
        $(document).ready(function () {
            //Get the context of the canvas element we want to select
            var c = $('#scratch-canvas');
            var ct = c.get(0).getContext('2d');
            var ctx = document.getElementById("scratch-canvas").getContext("2d");
            /*************************************************************************/

//Run function when window resizes
            $(window).resize(respondCanvas);

            function respondCanvas() {
                c.attr('width', jQuery("#mata").width());
                c.attr('height', jQuery("#mata").height());
                //Call a function to redraw other content (texts, images etc)

            }

            //Initial call
            respondCanvas();
        });
    </script>