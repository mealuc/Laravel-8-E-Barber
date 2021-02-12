@section('title','About Us - '. $setting->title)
@section('description'){{$setting->description}}@endsection
@section('keywords',$setting->keywords)
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
                                <img src="uploads/mustache.png" alt=""/>
                            </div>
                            <div class="title--heading">
                                <h1>Hakkımızda</h1>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb">
                                <li class="active">Biz kim miyiz?</li>
                            </ol>
                        </div>
                        <!-- .title end -->
                    </div>
                </div>
            </div>
        </div><!-- end all-page-bar -->
        <div class="section wb">
            <div class="container">
                <div class="container">
                    <div class="section-title row text-center">
                        <div class="col-md-8 offset-md-2">
                            <small>Kurucularımızla Tanışın</small>
                            <h3>KURUCULARIMIZ</h3>
                        </div>
                    </div><!-- end title -->

                    <div class="row dev-list text-center" >
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="widget our-inner-taem clearfix">
                                <div class="t-top"></div>
                                <div class="hover-br">
                                    <img src="{{asset('assets')}}/uploads/barber_team_01.jpg" alt="" class="img-responsive">
                                    <div class="social-up-hover">
                                        <div class="footer-social">
                                            <b>Sosyal Medyalar</b>
                                            <div>
                                                <a href="{{$setting->facebook}}" class="btn grd1"><i class="fa fa-facebook"></i></a>
                                                <a href="{{$setting->twitter}}" class="btn grd1"><i class="fa fa-twitter"></i></a>
                                                <a href="{{$setting->instagram}}" class="btn grd1"><i class="fa fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-box">
                                    <div class="widget-title">
                                        <h3>Ahmet Berberci</h3>
                                        <small>Kurucu</small>
                                    </div>
                                    <!-- end title -->
                                    <p>        1984 yılı İstanbul doğumlu, 14 yaşındayken 1935 yılında dedesi ile başlayıp, babasıyla devam eden kuaförlük serüvenini sürdürmüş ama aynı zamanda eğitim hayatına devam etmiştir. Sonucunda Kocaeli Üniv. Bilgisayar Programcılığı,Anadolu Üniv. İşletme Fakültelerini ve Başkent Üniversitesi Eğitim Koçluğu bitirmiştir. Eğitim hayatında bir dönüm noktası belirleyip dede mesleği kuaförlük üzerine rotasını çizip bu işi de eğitimli, donanımlı bir şekilde yapmayı öngörmüştür. Bu düşünce akabinde, diksiyon eğitimi ve beden dili, yurt içi ve yurt dışı bir çok akademi ve eğitmenden teknik kesim, renklendirme ve ürün eğitimlerini tamamlamıştır. 2015 te İtalyada gerçekleşen organizasyonda Türk Ekibi üyesi olarak, ülkemize dünya ikinciliğini getirdi. Kendini,meslektaşlarının eğitimine katkıda bulunma konusunda sorumlu hissetmiş, aldığı teknik eğitimleri geleneksel berberlik ile harmanlayarak 1000’lerce meslektaşına patentini aldığı Anatomik Saç Kesimi, salon işletmeciliği, müşteri ilişkileri, sosyal medya konularını da eğitim programına katarak, bilgi birikimini onlara aktarmaya devam etmektedir. Her şehre bir Kadir Alkan Salonu Projesi Kapsamında Merkez Etiler Salonu haricinde Sultanahmet, Bahçelievler, Beylikdüzü, Ankara, İzmir, Bursa, Antalya, Trabzon, Denizli, Gaziantep, Samsun, Sivas, Bolu, Kocaeli Türkmenistan, Bulgaristan, İskoçya, Hollanda, İngiltere Salon anlaşmalarıyla Ülkemizde ve Yurt Dışında Franchise salonlar açmaya devam etmektedir.</p>
                                </div>
                                <div class="t-bottom"></div>
                            </div><!--widget -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <div class="row dev-list text-center" >
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="widget our-inner-taem clearfix">
                                <div class="t-top"></div>
                                <div class="hover-br">
                                    <img src="{{asset('assets')}}/uploads/barber_team_03.jpg" alt="" class="img-responsive">
                                    <div class="social-up-hover">
                                        <div class="footer-social">
                                            <b>Sosyal Medyalar</b>
                                            <div>
                                                <a href="{{$setting->facebook}}" class="btn grd1"><i class="fa fa-facebook"></i></a>
                                                <a href="{{$setting->twitter}}" class="btn grd1"><i class="fa fa-twitter"></i></a>
                                                <a href="{{$setting->instagram}}" class="btn grd1"><i class="fa fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-box">
                                    <div class="widget-title">
                                        <h3>Mehmet Berberci</h3>
                                        <small>Kurucu Ortak</small>
                                    </div>
                                    <!-- end title -->
                                    <p>        1982 yılı İstanbul doğumlu, 12 yaşındayken 1935 yılında dedesi ile başlayıp, babasıyla devam eden kuaförlük serüvenini sürdürmüş ama aynı zamanda eğitim hayatına devam etmiştir. Sonucunda Kocaeli Üniv. Bilgisayar Programcılığı,Anadolu Üniv. İşletme Fakültelerini ve Başkent Üniversitesi Eğitim Koçluğu bitirmiştir. Eğitim hayatında bir dönüm noktası belirleyip dede mesleği kuaförlük üzerine rotasını çizip bu işi de eğitimli, donanımlı bir şekilde yapmayı öngörmüştür. Bu düşünce akabinde, diksiyon eğitimi ve beden dili, yurt içi ve yurt dışı bir çok akademi ve eğitmenden teknik kesim, renklendirme ve ürün eğitimlerini tamamlamıştır. 2015 te İtalyada gerçekleşen organizasyonda Türk Ekibi üyesi olarak, ülkemize dünya ikinciliğini getirdi. Kendini,meslektaşlarının eğitimine katkıda bulunma konusunda sorumlu hissetmiş, aldığı teknik eğitimleri geleneksel berberlik ile harmanlayarak 1000’lerce meslektaşına patentini aldığı Anatomik Saç Kesimi, salon işletmeciliği, müşteri ilişkileri, sosyal medya konularını da eğitim programına katarak, bilgi birikimini onlara aktarmaya devam etmektedir. Her şehre bir Kadir Alkan Salonu Projesi Kapsamında Merkez Etiler Salonu haricinde Sultanahmet, Bahçelievler, Beylikdüzü, Ankara, İzmir, Bursa, Antalya, Trabzon, Denizli, Gaziantep, Samsun, Sivas, Bolu, Kocaeli Türkmenistan, Bulgaristan, İskoçya, Hollanda, İngiltere Salon anlaşmalarıyla Ülkemizde ve Yurt Dışında Franchise salonlar açmaya devam etmektedir.</p>
                                </div>
                                <div class="t-bottom"></div>
                            </div><!--widget -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end container -->
                <hr class="hr1">
                <div class="row">
                    <div class="title--heading">
                        <h1 style="align-content: center;align-items: center;align-self: center"><b>Amacımız</b></h1>
                    </div>
                    <div class="col-md-12">
                        <div class="about-tab">
                            {!! $setting->aboutus !!}
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="hr1">

                <div class="row text-center">
                    <div class="col-lg-12">

                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->
    </div>

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
