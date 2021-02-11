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

                <div class="row">
                    <div class="col-md-6">
                        <div class="service-wrap text-center clearfix">
                            <div class="uptop">
                                <img src="{{asset('assets')}}/uploads/barber_service_01.jpg" alt="" class="img-responsive img-rounded alignleft">
                            </div>
                            <h4>Sakal, Bıyık Bakımı</h4>
                            <p>Mesleğiniz,giyim kuşamınız ve toplumdaki statünüzü göz önünde bulundurarak sadece size özel kafa ve yüz şeklinize göre "Anatomik Saç" ve sakal kesimi yapmaktayız.</p>
                        </div><!-- end issue -->

                        <div class="service-wrap text-center clearfix">
                            <div class="uptop">
                                <img src="{{asset('assets')}}/uploads/barber_service_02.jpg" alt="" class="img-responsive img-rounded alignleft">
                            </div>
                            <h4>Detaylı Bakım</h4>
                            <p>Kaş, kulak burun gibi yüz için ufak ama önemli kısımların bakımını yapıyoruz.</p>
                        </div><!-- end issue -->

                        <div class="service-wrap text-center lastchild clearfix">
                            <div class="uptop">
                                <img src="{{asset('assets')}}/uploads/barber_service_03.jpg" alt="" class="img-responsive img-rounded alignleft">
                            </div>
                            <h4>Yüz ve Cilt Bakımı</h4>
                            <p>Kardeşler Berber ile cildinizdeki ölü deriyi ve yağı temizleyip siyah nokta oluşumunu asgari seviyeye indiriyoruz.</p>
                        </div><!-- end issue -->
                    </div><!-- end col -->

                    <div class="col-md-6">
                        <div class="service-wrap text-center clearfix">
                            <div class="uptop">
                                <img src="{{asset('assets')}}/uploads/barber_service_04.jpg" alt="" class="img-responsive img-rounded alignleft">
                            </div>
                            <h4>Stüdyo Çekimleri</h4>
                            <p>Özel günler ve resmi kurumlar için gerekli olan çekimleri profesyonel fotoğrafçı arkadaşlarımızla size sunuyoruz.</p>
                        </div><!-- end issue -->

                        <div class="service-wrap text-center clearfix">
                            <div class="uptop">
                                <img src="{{asset('assets')}}/uploads/barber_service_05.jpg" alt="" class="img-responsive img-rounded alignleft">
                            </div>
                            <h4>Saç/Sakal Şekillendirme</h4>
                            <p>Günlük hayatta ya da özel günlerde sizin için saç ve sakal şekillendirme ve düzenleme yapmaktayız.</p>
                        </div><!-- end issue -->

                        <div class="service-wrap text-center lastchild clearfix">
                            <div class="uptop">
                                <img src="{{asset('assets')}}/uploads/barber_service_06.jpg" alt="" class="img-responsive img-rounded alignleft">
                            </div>
                            <h4>Saç Yıkama</h4>
                            <p>Özel yağlar ve şampuanlarla hassas saçlarınıza masaj ve saç yıkama hizmetini sunuyoruz.</p>
                        </div><!-- end issue -->
                    </div><!-- end col -->
                </div>
            </div><!-- end container -->
        </div><!-- end section -->

        <div id="pricing" class="section lb">
            <div class="container">
                <div class="section-title row text-center">
                    <div class="col-md-8 offset-md-2">
                        <h3>Fiyatlandırmamız</h3>
                    </div>
                </div><!-- end title -->
                <div class="row flex-items-xs-middle flex-items-xs-center">

                    <!-- Table #1  -->
                    <div class="col-xs-12 col-lg-4">
                        <div class="card text-center">
                            <div class="card-block">
                                <h4 class="card-title pricing-ti">
                                    Traş
                                </h4>
                                <div class="line-pricing">
                                    <h5>Sakal Traşı</h5>
                                    <p>Her türlü sakalı ve sakal türünü istediğiniz şekil ve boyutta keserek size en uygun hale getiriyoruz.</p>
                                    <a href="{{route('appointment')}}">₺ 10</a>
                                </div>
                                <div class="line-pricing">
                                    <h5>Saç Traşı</h5>
                                    <p>Her türlü saçı ve saç türünü istediğiniz şekil ve boyutta keserek size en uygun hale getiriyoruz.</p>
                                    <a href="{{route('appointment')}}">₺ 20</a>
                                </div>
                                <div class="line-pricing">
                                    <h5>Özel Traş</h5>
                                    <p>Sıradışı tarzlar için geliştirdiğimiz alet ve edevatlarımızla farklılığınızı öne koyuyoruz.</p>
                                    <a href="{{route('appointment')}}">₺ 30</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Table #1  -->
                    <div class="col-xs-12 col-lg-4">
                        <div class="card text-center">
                            <div class="card-block">
                                <h4 class="card-title pricing-ti">
                                    Fotoğraf Çekimi
                                </h4>
                                <div class="line-pricing">
                                    <h5>Vesikalık Fotoğraf</h5>
                                    <p>Resmi kurumlar için istenilen ebat ve boylarda istediğiniz sayıda fotoğraf çektiriyoruz.</p>
                                    <a href="{{route('appointment')}}">₺ 20</a>
                                </div>
                                <div class="line-pricing">
                                    <h5>Aile Fotoğrafı</h5>
                                    <p>Kalıcı bir anı olarak bırakmak istediğiniz aile,soy fotoğraflarını sizler için düzenliyoruz.</p>
                                    <a href="{{route('appointment')}}">₺ 30</a>
                                </div>
                                <div class="line-pricing">
                                    <h5>Düğün Fotoğrafı</h5>
                                    <p>En özel günlerinizi sizin için daha özel bir halde anılaştırarak kalıcı olmasını sağlıyoruz.</p>
                                    <a href="{{route('appointment')}}">₺ 100</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Table #1  -->
                    <div class="col-xs-12 col-lg-4">
                        <div class="card text-center">
                            <div class="card-block">
                                <h4 class="card-title pricing-ti">
                                    Saç ve Cilt Bakımı
                                </h4>
                                <div class="line-pricing">
                                    <h5>Bitkisel Yağlar</h5>
                                    <p>Ünlü aktarlardan geliştirdiğimiz kıl ve cilt bakımı için en özel yağları sizlere sunuyoruz.</p>
                                    <a href="{{route('appointment')}}">₺ 40</a>
                                </div>
                                <div class="line-pricing">
                                    <h5>Masaj</h5>
                                    <p>Şehir hayatı veya günü stresini atmak için eğitimli elemanlarımızla sizleri rahatlatıyoruz.</p>
                                    <a href="{{route('appointment')}}">₺ 50</a>
                                </div>
                                <div class="line-pricing">
                                    <h5>Tam Bakım</h5>
                                    <p>El,ayak kulak burun v.b daha bir çok özel bakımı sizlerin önüne seriyoruz.</p>
                                    <a href="{{route('appointment')}}">₺ 85</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

