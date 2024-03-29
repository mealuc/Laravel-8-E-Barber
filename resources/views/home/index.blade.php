<!--Out of usage-->
<!DOCTYPE html>
<html lang="en">
@include('home.head_css')
<body class="barber_version">
@include('home._loader')
@include('home._header')
@include('home._slider')
@section('content')
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="section wb">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-left">
                        <div class="message-box">
                            <h4>About</h4>
                            <h2>Welcome to SMBarber</h2>
                            <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>

                            <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vitae rutrum neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum risus. Phasellus et congue justo. </p>

                            <a href="#services" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Learn More</a>
                        </div><!-- end messagebox -->
                    </div><!-- end col -->
                    <div class="col-md-6 text-center">
                        <div class="right-box">
                            <img class="img-fluid" src="{{asset('assets')}}/uploads/about-img.jpg" alt="" />
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="hr1">

                <div class="row">
                    <div class="col-md-12">
                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" href="#tab_a" data-toggle="tab">Our Mission</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tab_b" data-toggle="tab">Why Us?</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tab_c" data-toggle="tab">About Us</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab_a">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi scelerisque tortor mi, eget mattis velit sagittis id. Duis ornare mauris eu eros interdum, vitae finibus arcu ultricies. Donec vitae felis eleifend, dignissim erat a, pretium diam. Donec eu massa odio. Suspendisse et ornare lacus, pharetra imperdiet ligula.</p>
                                    <p>Vestibulum ac quam id lorem semper condimentum. Nulla vel ligula turpis. Nullam luctus, mi nec rhoncus gravida, tortor est semper purus, a feugiat sapien odio non urna. Fusce pellentesque neque ut nisi rhoncus imperdiet. Sed eu purus vel turpis consectetur convallis. Donec a dolor tellus. Phasellus dignissim erat nec ipsum condimentum sollicitudin. </p>
                                </div>
                                <div class="tab-pane fade" id="tab_b">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                    <ul>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>User Experince</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>Full Devices</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>Awesome Design</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>Visual Impact</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>100% Sincronized</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>Custom Support</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="tab_c">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                </div>
                            </div><!-- tab content -->
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="hr1">

                <div class="row text-center">
                    <div class="col-lg-12">
                        <div class="owl-services owl-carousel owl-theme">

                            <div class="service-widget">
                                <div class="post-media wow fadeIn">
                                    <a href="{{asset('assets')}}/uploads/barber_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                                    <img src="{{asset('assets')}}/uploads/barber_01.jpg" alt="" class="img-responsive img-rounded">
                                </div>
                                <div class="dit-box">
                                    <h3>Show us Your Graft Style</h3>
                                    <p>Aliquam sagittis ligula et sem lacinia, ut facilisis enim sollicitudin. Proin nisi est, convallis nec purus vitae, iaculis posuere sapien. Cum sociis natoque.</p>
                                </div>
                            </div><!-- end service -->

                            <div class="service-widget">
                                <div class="post-media wow fadeIn">
                                    <a href="{{asset('assets')}}/uploads/barber_02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                                    <img src="{{asset('assets')}}/uploads/barber_02.jpg" alt="" class="img-responsive img-rounded">
                                </div>
                                <div class="dit-box">
                                    <h3>Outstanding Barber Shop</h3>
                                    <p>Duis at tellus at dui tincidunt scelerisque nec sed felis. Suspendisse id dolor sed leo rutrum euismod. Nullam vestibulum fermentum erat. It nam auctor. </p>
                                </div>
                            </div><!-- end service -->

                            <div class="service-widget">
                                <div class="post-media wow fadeIn">
                                    <a href="{{asset('assets')}}/uploads/barber_03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                                    <img src="{{asset('assets')}}/uploads/barber_03.jpg" alt="" class="img-responsive img-rounded">
                                </div>
                                <div class="dit-box">
                                    <h3>The Barber Materials</h3>
                                    <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa sodales aliquam at eget quam. Integer ultricies et magna quis posuere.</p>
                                </div>
                            </div><!-- end service -->

                            <div class="service-widget">
                                <div class="post-media wow fadeIn">
                                    <a href="{{asset('assets')}}/uploads/barber_04.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                                    <img src="{{asset('assets')}}/uploads/barber_04.jpg" alt="" class="img-responsive img-rounded">
                                </div>
                                <div class="dit-box">
                                    <h3>The Barber Materials</h3>
                                    <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa sodales aliquam at eget quam. Integer ultricies et magna quis posuere.</p>
                                </div>
                            </div><!-- end service -->

                            <div class="service-widget">
                                <div class="post-media wow fadeIn">
                                    <a href="{{asset('assets')}}/uploads/barber_05.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                                    <img src="{{asset('assets')}}/uploads/barber_05.jpg" alt="" class="img-responsive img-rounded">
                                </div>
                                <div class="dit-box">
                                    <h3>The Barber Materials</h3>
                                    <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa sodales aliquam at eget quam. Integer ultricies et magna quis posuere.</p>
                                </div>
                            </div><!-- end service -->

                            <div class="service-widget">
                                <div class="post-media wow fadeIn">
                                    <a href="{{asset('assets')}}/uploads/barber_06.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                                    <img src="{{asset('assets')}}/uploads/barber_06.jpg" alt="" class="img-responsive img-rounded">
                                </div>
                                <div class="dit-box">
                                    <h3>The Barber Materials</h3>
                                    <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa sodales aliquam at eget quam. Integer ultricies et magna quis posuere.</p>
                                </div>
                            </div><!-- end service -->

                        </div>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->

        <div id="pricing" class="section lb">
            <div class="container">
                <div class="section-title row text-center">
                    <div class="col-md-8 offset-md-2">
                        <small>OUR BABRER PRICING</small>
                        <h3>BABRER PRICING</h3>
                    </div>
                </div><!-- end title -->
                <div class="row flex-items-xs-middle flex-items-xs-center">

                    <!-- Table #1  -->
                    <div class="col-xs-12 col-lg-4">
                        <div class="card text-center">
                            <div class="card-block">
                                <h4 class="card-title pricing-ti">
                                    Shaving
                                </h4>
                                <div class="line-pricing">
                                    <h5>Lorem ipsum dolor</h5>
                                    <p>Donec eu diam ante. Nam non porta ipsum, nec tristique odio. Etiam vel libero non massa rutrum molestie non non ipsum.</p>
                                    <a href="#">$ 5</a>
                                </div>
                                <div class="line-pricing">
                                    <h5>Lorem ipsum dolor</h5>
                                    <p>Donec eu diam ante. Nam non porta ipsum, nec tristique odio. Etiam vel libero non massa rutrum molestie non non ipsum.</p>
                                    <a href="#">$ 10</a>
                                </div>
                                <div class="line-pricing">
                                    <h5>Lorem ipsum dolor</h5>
                                    <p>Donec eu diam ante. Nam non porta ipsum, nec tristique odio. Etiam vel libero non massa rutrum molestie non non ipsum.</p>
                                    <a href="#">$ 15</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Table #1  -->
                    <div class="col-xs-12 col-lg-4">
                        <div class="card text-center">
                            <div class="card-block">
                                <h4 class="card-title pricing-ti">
                                    Face Masking
                                </h4>
                                <div class="line-pricing">
                                    <h5>Lorem ipsum dolor</h5>
                                    <p>Donec eu diam ante. Nam non porta ipsum, nec tristique odio. Etiam vel libero non massa rutrum molestie non non ipsum.</p>
                                    <a href="#">$ 5</a>
                                </div>
                                <div class="line-pricing">
                                    <h5>Lorem ipsum dolor</h5>
                                    <p>Donec eu diam ante. Nam non porta ipsum, nec tristique odio. Etiam vel libero non massa rutrum molestie non non ipsum.</p>
                                    <a href="#">$ 10</a>
                                </div>
                                <div class="line-pricing">
                                    <h5>Lorem ipsum dolor</h5>
                                    <p>Donec eu diam ante. Nam non porta ipsum, nec tristique odio. Etiam vel libero non massa rutrum molestie non non ipsum.</p>
                                    <a href="#">$ 15</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Table #1  -->
                    <div class="col-xs-12 col-lg-4">
                        <div class="card text-center">
                            <div class="card-block">
                                <h4 class="card-title pricing-ti">
                                    Hair Styling
                                </h4>
                                <div class="line-pricing">
                                    <h5>Lorem ipsum dolor</h5>
                                    <p>Donec eu diam ante. Nam non porta ipsum, nec tristique odio. Etiam vel libero non massa rutrum molestie non non ipsum.</p>
                                    <a href="#">$ 5</a>
                                </div>
                                <div class="line-pricing">
                                    <h5>Lorem ipsum dolor</h5>
                                    <p>Donec eu diam ante. Nam non porta ipsum, nec tristique odio. Etiam vel libero non massa rutrum molestie non non ipsum.</p>
                                    <a href="#">$ 10</a>
                                </div>
                                <div class="line-pricing">
                                    <h5>Lorem ipsum dolor</h5>
                                    <p>Donec eu diam ante. Nam non porta ipsum, nec tristique odio. Etiam vel libero non massa rutrum molestie non non ipsum.</p>
                                    <a href="#">$ 15</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="barbers" class="section lb">
            <div class="container">
                <div class="section-title row text-center">
                    <div class="col-md-8 offset-md-2">
                        <small>MEET OUR BABRER TEAM</small>
                        <h3>OUR BARBERS</h3>
                    </div>
                </div><!-- end title -->

                <div class="row dev-list text-center">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="widget our-inner-taem clearfix">
                            <div class="t-top"></div>
                            <div class="hover-br">
                                <img src="{{asset('assets')}}/uploads/barber_team_01.jpg" alt="" class="img-responsive">
                                <div class="social-up-hover">
                                    <div class="footer-social">
                                        <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-box">
                                <div class="widget-title">
                                    <h3>Soren Bo Bostian</h3>
                                    <small>The Founder</small>
                                </div>
                                <!-- end title -->
                                <p>Hello guys, I am Soren from Sirbistana. I am senior art director and founder of The Barber Shop Company.</p>
                            </div>
                            <div class="t-bottom"></div>
                        </div><!--widget -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="widget our-inner-taem clearfix">
                            <div class="t-top"></div>
                            <div class="hover-br">
                                <img src="{{asset('assets')}}/uploads/barber_team_03.jpg" alt="" class="img-responsive">
                                <div class="social-up-hover">
                                    <div class="footer-social">
                                        <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-box">
                                <div class="widget-title">
                                    <h3>Bryan Saftler</h3>
                                    <small>The Barber</small>
                                </div>
                                <!-- end title -->
                                <p>Hello guys, I am Soren from Sirbistana. I am senior art director and barber of the Barber Shop Market.</p>
                            </div>
                            <div class="t-bottom"></div>
                        </div><!--widget -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="widget our-inner-taem clearfix">
                            <div class="t-top"></div>
                            <div class="hover-br">
                                <img src="{{asset('assets')}}/uploads/barber_team_02.jpg" alt="" class="img-responsive">
                                <div class="social-up-hover">
                                    <div class="footer-social">
                                        <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-box">
                                <div class="widget-title">
                                    <h3>Matthew Bayliss</h3>
                                    <small>The Barber</small>
                                </div>
                                <!-- end title -->
                                <p>Hello guys, I am Soren from Sirbistana. I am senior art director and barber of the Barber Shop Website.</p>
                            </div>
                            <div class="t-bottom"></div>
                        </div><!--widget -->
                    </div><!-- end col -->
                </div><!-- end row -->
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
        </div>
@show
<!--Out of usage-->
