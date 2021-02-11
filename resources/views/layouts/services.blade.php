@section('title','Services - '.$setting->title)
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
                                <h1>Servislerimiz</h1>
                            </div>
                            <div class="clearfix"></div>

                            <ol class="breadcrumb">
                                <li class="active">Servislerimiz</li>
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
                        <p class="lead">Çeşitli kurumlardan alınan kuaförlük belgesi bulunan ve ödüller almış son derece profeyonel çalışan arkadaşlarımızın tasarladığı kişiye özel tasarımlarla hizmetinizdeyiz. </p>
                    </div>
                </div><!-- end title -->
                <div class="section-title row text-center">
                    <div class="col-md-8 offset-md-2">
                        <h3>Tüm Hizmetlerimiz</h3>
                        <hr/>
                    </div>
                </div><!-- end title -->
                <div class="row" style="float: left">
                    @foreach($service as $rs)
                        <div class="col-md-6" >
                            <div class="service-wrap text-center clearfix">
                                <div class="uptop">
                                    <a href="{{route('appointment')}}"><img src="{{Storage::url($rs->image)}}" alt="" class="img-responsive img-rounded alignleft"></a>
                                </div>
                                <h4>{{$rs->title}}</h4>
                                <p>{{$rs->description}}</p>
                            </div><!-- end issue -->
                        </div>
                    @endforeach
                    <div id="pricing" class="section lb">
                        <div class="container">
                            <div class="section-title row text-center">
                                <div class="col-md-8 offset-md-2">
                                    <h3>Fiyatlandırmamız</h3>
                                    <hr/>
                                </div>
                            </div><!-- end title -->
                            <div class="row flex-items-xs-middle flex-items-xs-center" style="align-content: center">
                            @foreach($service as $rs)
                                <!-- Table #1  -->
                                    <div class="col-xs-12 col-lg-4">
                                        <div class="card text-center">
                                            <div class="card-block">
                                                <h4 class="card-title pricing-ti">
                                                    {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title)}}
                                                </h4>
                                                <div class="line-pricing">
                                                    <h5>{{$rs->title}}</h5>
                                                    <h6>{{$rs->description}}</h6>
                                                    <a href="{{route('appointment')}}">₺{{$rs->price}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                            <!-- Table #1  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end container -->
            </div><!-- end container -->
        </div><!-- end section -->

        <div id="pricing" class="section lb">
            <div class="container">
                <div class="section-title row text-center">
                    <div class="col-md-8 offset-md-2">
                        <h3>Galerimiz</h3>
                    </div>
                </div><!-- end title -->
            </div>
        </div>
        <div>
            <div class="col-lg-7 col-md-2" style="float: right">
                <div class="owl-services owl-carousel owl-theme">
                    <div class="service-widget">
                        <div class="post-media wow fadeIn">
                            <a href="{{asset('assets')}}/uploads/barber_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="{{asset('assets')}}/uploads/barber_01.jpg" alt="" class="img-responsive img-rounded">
                        </div>
                        <div class="dit-box">
                            <h3>Bize Tarzını Göster</h3>
                            <p>Hayatta hangi tarzda yaşadığını bize söylersin ve yaparız ya da senin için en uygun olanı önerip ona göre yönlendiririz.</p>
                        </div>
                    </div><!-- end service -->

                    <div class="service-widget">
                        <div class="post-media wow fadeIn">
                            <a href="{{asset('assets')}}/uploads/barber_02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="{{asset('assets')}}/uploads/barber_02.jpg" alt="" class="img-responsive img-rounded">
                        </div>
                        <div class="dit-box">
                            <h3>Berber Ekipman Kullanımları</h3>
                            <p>Son derece kaliteli paslanmaz çelik yapımı aletler ve son teknoloji ürünlerle kolaylıkla her zorluğun üstesinden gelebiliriz.İster sen sipariş et istersen biz sipariş edelim.</p>
                        </div>
                    </div><!-- end service -->

                    <div class="service-widget">
                        <div class="post-media wow fadeIn">
                            <a href="{{asset('assets')}}/uploads/barber_03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="{{asset('assets')}}/uploads/barber_03.jpg" alt="" class="img-responsive img-rounded">
                        </div>
                        <div class="dit-box">
                            <h3>Berber Ekipmanları</h3>
                            <p>Son derece rahat bekleme koltukları ve her türlü ayarlanabilen berber koltuğu ile işlem süreci ve bekleme süresince rahat etmeni sağlarız.</p>
                        </div>
                    </div><!-- end service -->

                    <div class="service-widget">
                        <div class="post-media wow fadeIn">
                            <a href="{{asset('assets')}}/uploads/barber_04.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="{{asset('assets')}}/uploads/barber_04.jpg" alt="" class="img-responsive img-rounded">
                        </div>
                        <div class="dit-box">
                            <h3>Berber Materyalleri</h3>
                            <p>Her kullanımda yıkanan havlular ve özel karışım temizleme suyuyla kesinlikle temiz olacak şekilde eşyaları temizler senin sağlını en üst dereceden gözetleriz.</p>
                        </div>
                    </div><!-- end service -->

                    <div class="service-widget">
                        <div class="post-media wow fadeIn">
                            <a href="{{asset('assets')}}/uploads/barber_05.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="{{asset('assets')}}/uploads/barber_05.jpg" alt="" class="img-responsive img-rounded">
                        </div>
                        <div class="dit-box">
                            <h3>Berber Sunumları</h3>
                            <p>İşlem süresince ya da işlem sonrası ikramlarımız mevcuttur.İşlem sonrası her yeri ayna olan özel kabinimizde özel yerleştirilmiş ışıklarla kendini kontrol edebilirsin.</p>
                        </div>
                    </div><!-- end service -->

                    <div class="service-widget">
                        <div class="post-media wow fadeIn">
                            <a href="{{asset('assets')}}/uploads/barber_06.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="{{asset('assets')}}/uploads/barber_06.jpg" alt="" class="img-responsive img-rounded">
                        </div>
                        <div class="dit-box">
                            <h3>Berber Teşhirleri</h3>
                            <p>Son derece kaliteli partner ve ortaklarımızla sana en iyi kalitede ürün sunmaktan onur duyarız.</p>
                        </div>
                    </div><!-- end service -->
                </div>
            </div>
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

