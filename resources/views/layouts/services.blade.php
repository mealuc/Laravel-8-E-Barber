<!DOCTYPE html>
<html lang="en">
@include('home.head_css')
<body class="barber_version">

@include('home._loader')
@include('home._header')
@section('content')
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="all-page-bar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="title title-1 text-center">
                            <div class="much">
                                <img src="{{asset('assets')}}/uploads/mustache.png" alt=""/>
                            </div>

                            <div class="title--heading">
                                <h1>Our Services</h1>
                            </div>
                            <div class="clearfix"></div>

                            <ol class="breadcrumb">
                                <li><a href="{{asset('assets')}}/index-3.html">Home</a></li>
                                <li class="active">Our Services</li>
                            </ol>
                        </div>
                        <!-- .title end -->
                    </div>
                </div>
            </div>
        </div><!-- end all-page-bar -->

        <div id="services" class="section lb">
            <div class="container">
                <div class="section-title row text-center">
                    <div class="col-md-8 offset-md-2">
                        <small>WELCOME TO THE OUR BARBER SHOP</small>
                        <h3>OUR SERVICES</h3>
                        <hr class="grd1">
                        <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
                    </div>
                </div><!-- end title -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="service-wrap text-center clearfix">
                            <div class="uptop">
                                <img src="{{asset('assets')}}/uploads/barber_service_01.jpg" alt="" class="img-responsive img-rounded alignleft">
                            </div>
                            <h4>beard, mustache care</h4>
                            <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
                        </div><!-- end issue -->

                        <div class="service-wrap text-center clearfix">
                            <div class="uptop">
                                <img src="{{asset('assets')}}/uploads/barber_service_02.jpg" alt="" class="img-responsive img-rounded alignleft">
                            </div>
                            <h4>detailed feather cleaning</h4>
                            <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
                        </div><!-- end issue -->

                        <div class="service-wrap text-center lastchild clearfix">
                            <div class="uptop">
                                <img src="{{asset('assets')}}/uploads/barber_service_03.jpg" alt="" class="img-responsive img-rounded alignleft">
                            </div>
                            <h4>facial and skin care</h4>
                            <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
                        </div><!-- end issue -->
                    </div><!-- end col -->

                    <div class="col-md-6">
                        <div class="service-wrap text-center clearfix">
                            <div class="uptop">
                                <img src="{{asset('assets')}}/uploads/barber_service_04.jpg" alt="" class="img-responsive img-rounded alignleft">
                            </div>
                            <h4>studio shots</h4>
                            <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
                        </div><!-- end issue -->

                        <div class="service-wrap text-center clearfix">
                            <div class="uptop">
                                <img src="{{asset('assets')}}/uploads/barber_service_05.jpg" alt="" class="img-responsive img-rounded alignleft">
                            </div>
                            <h4>forming the beard</h4>
                            <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
                        </div><!-- end issue -->

                        <div class="service-wrap text-center lastchild clearfix">
                            <div class="uptop">
                                <img src="{{asset('assets')}}/uploads/barber_service_06.jpg" alt="" class="img-responsive img-rounded alignleft">
                            </div>
                            <h4>hair wash</h4>
                            <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
                        </div><!-- end issue -->
                    </div><!-- end col -->
                </div>
            </div><!-- end container -->
        </div><!-- end section -->

        <div id="testimonials" class="parallax section db parallax-inner-bg">
            <div class="container">
                <div class="section-title row text-center">
                    <div class="col-md-8 offset-md-2">
                        <small>LET'S SEE OUR TESTIMONIALS</small>
                        <h3>HAPPY TESTIMONIALS</h3>
                    </div>
                </div><!-- end title -->

                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="testi-carousel owl-carousel owl-theme">
                            <div class="testimonial clearfix">
                                <div class="testi-meta">
                                    <i class="fa fa-quote-right"></i>
                                    <img src="{{asset('assets')}}/uploads/testi_01.png" alt="" class="img-responsive alignright">
                                    <h4>James Fernando <small>- Manager of Racer</small></h4>
                                </div>
                                <div class="desc">
                                    <h3>Wonderful Support!</h3>
                                    <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                                </div>
                                <!-- end testi-meta -->
                            </div>
                            <!-- end testimonial -->
                            <div class="testimonial clearfix">
                                <div class="testi-meta">
                                    <i class="fa fa-quote-right"></i>
                                    <img src="{{asset('assets')}}/uploads/testi_02.png" alt="" class="img-responsive alignright">
                                    <h4>Jacques Philips <small>- Designer</small></h4>
                                </div>
                                <div class="desc">
                                    <h3>Awesome Services!</h3>
                                    <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                                </div>
                                <!-- end testi-meta -->
                            </div>
                            <!-- end testimonial -->
                            <div class="testimonial clearfix">
                                <div class="testi-meta">
                                    <i class="fa fa-quote-right"></i>
                                    <img src="{{asset('assets')}}/uploads/testi_03.png" alt="" class="img-responsive alignright">
                                    <h4>Venanda Mercy <small>- Newyork City</small></h4>
                                </div>
                                <div class="desc">
                                    <h3>Great & Talented Team!</h3>
                                    <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                                </div>
                                <!-- end testi-meta -->
                            </div>
                            <!-- end testimonial -->
                            <div class="testimonial clearfix">
                                <div class="testi-meta">
                                    <i class="fa fa-quote-right"></i>
                                    <img src="{{asset('assets')}}/uploads/testi_03.png" alt="" class="img-responsive alignright">
                                    <h4>Venanda Mercy <small>- Newyork City</small></h4>
                                </div>
                                <div class="desc">
                                    <h3> Great & Talented Team!</h3>
                                    <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                                </div>
                                <!-- end testi-meta -->
                            </div>
                            <!-- end testimonial -->
                        </div><!-- end carousel -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->
    <!-- Menu Toggle Script -->
    <script>
        (function($) {
            "use strict";
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
            smoothScroll.init({
                selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
                selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
                speed: 500, // Integer. How fast to complete the scroll in milliseconds
                easing: 'easeInOutCubic', // Easing pattern to use
                offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
                callback: function ( anchor, toggle ) {} // Function to run after scrolling
            });
        })(jQuery);
    </script>
@show
@include('home._footer')

<!--<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>-->
<!-- ALL JS FILES -->
<script src="{{asset('assets')}}/js/all.js"></script>
<script src="{{asset('assets')}}/js/responsive-tabs.js"></script>
<!-- ALL PLUGINS -->
<script src="{{asset('assets')}}/js/custom.js"></script>
</body>
</html>

