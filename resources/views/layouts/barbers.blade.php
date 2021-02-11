@section('title','Barbers - '.$setting->title)
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
                                <h1>Berberlerimiz</h1>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb">
                                <li class="active">Berberlerimiz</li>
                            </ol>
                        </div>
                        <!-- .title end -->
                    </div>
                </div>
            </div>
        </div><!-- end all-page-bar -->
        <div id="barbers" class="section lb">
            <div class="container">
                <div class="section-title row text-center">
                    <div class="col-md-8 offset-md-2">
                        <h3>PROFESYONEL BERBERLERİMİZLE TANIŞIN</h3>
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
                                        <a href="{{$setting->facebook}}" class="btn grd1"><i class="fa fa-facebook"></i></a>
                                        <a href="{{$setting->twitter}}" class="btn grd1"><i class="fa fa-twitter"></i></a>
                                        <a href="{{$setting->instagram}}" class="btn grd1"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-title">
                                <h3>Ahmet Berberci</h3>
                                <small>Kurucu</small>
                            </div>
                            <!-- end title -->
                            <p>Hello guys, I am Soren from Sirbistana. I am senior art director and founder of The Barber Shop Company.</p>
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
                                        <a href="{{$setting->facebook}}" class="btn grd1"><i class="fa fa-facebook"></i></a>
                                        <a href="{{$setting->twitter}}" class="btn grd1"><i class="fa fa-twitter"></i></a>
                                        <a href="{{$setting->instagram}}" class="btn grd1"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-title">
                                <h3>Mehmet Berberci</h3>
                                <small>Kurucu Ortak</small>
                            </div>
                            <!-- end title -->
                            <p>Hello guys, I am Soren from Sirbistana. I am senior art director and barber of the Barber Shop Market.</p>
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
                                        <a href="{{$setting->facebook}}" class="btn grd1"><i class="fa fa-facebook"></i></a>
                                        <a href="{{$setting->twitter}}" class="btn grd1"><i class="fa fa-twitter"></i></a>
                                        <a href="{{$setting->instagram}}" class="btn grd1"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-title">
                                <h3>Hikmet Kesen</h3>
                                <small>Baş Berber</small>
                            </div>
                            <!-- end title -->
                            <p>Hello guys, I am Soren from Sirbistana. I am senior art director and barber of the Barber Shop Website.</p>
                            <div class="t-bottom"></div>
                        </div><!--widget -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="widget our-inner-taem clearfix">
                            <div class="t-top"></div>
                            <div class="hover-br">
                                <img src="{{asset('assets')}}/uploads/model3.jpg" alt="" class="img-responsive">
                                <div class="social-up-hover">
                                    <div class="footer-social">
                                        <a href="{{$setting->facebook}}" class="btn grd1"><i class="fa fa-facebook"></i></a>
                                        <a href="{{$setting->twitter}}" class="btn grd1"><i class="fa fa-twitter"></i></a>
                                        <a href="{{$setting->instagram}}" class="btn grd1"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-title">
                                <h3>Süleyman Yoğuran</h3>
                                <small>Bakım Uzmanı</small>
                            </div>
                            <!-- end title -->
                            <p>Hello guys, I am Soren from Sirbistana. I am senior art director and founder of The Barber Shop Company.</p>
                            <div class="t-bottom"></div>
                        </div><!--widget -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="widget our-inner-taem clearfix">
                            <div class="t-top"></div>
                            <div class="hover-br">
                                <img src="{{asset('assets')}}/uploads/model1.jpg" alt="" class="img-responsive">
                                <div class="social-up-hover">
                                    <div class="footer-social">
                                        <a href="{{$setting->facebook}}" class="btn grd1"><i class="fa fa-facebook"></i></a>
                                        <a href="{{$setting->twitter}}" class="btn grd1"><i class="fa fa-twitter"></i></a>
                                        <a href="{{$setting->instagram}}" class="btn grd1"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-title">
                                <h3>Tarık Işık</h3>
                                <small>Fotoğrafçı</small>
                            </div>
                            <!-- end title -->
                            <p>Hello guys, I am Soren from Sirbistana. I am senior art director and barber of the Barber Shop Market.</p>
                            <div class="t-bottom"></div>
                        </div><!--widget -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="widget our-inner-taem clearfix">
                            <div class="t-top"></div>
                            <div class="hover-br">
                                <img src="{{asset('assets')}}/uploads/model2.jpg" alt="" class="img-responsive">
                                <div class="social-up-hover">
                                    <div class="footer-social">
                                        <a href="{{$setting->facebook}}" class="btn grd1"><i class="fa fa-facebook"></i></a>
                                        <a href="{{$setting->twitter}}" class="btn grd1"><i class="fa fa-twitter"></i></a>
                                        <a href="{{$setting->instagram}}" class="btn grd1"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-title">
                                <h3>Fatih Kırpılmış</h3>
                                <small>Berber</small>
                            </div>
                            <!-- end title -->
                            <p>Hello guys, I am Soren from Sirbistana. I am senior art director and barber of the Barber Shop Website.</p>
                            <div class="t-bottom"></div>
                        </div><!--widget -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->

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
