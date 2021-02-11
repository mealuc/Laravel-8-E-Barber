@section('title','Home - '.$setting->title)
@section('description')
    {{$setting->description}}
@endsection
@section('keywords',$setting->keywords)
<html lang="en">
@include('home.head_css')
<body class="barber_version">
@include('home._loader')
@include('home._header')
@section('content')
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="section wb">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-left">
                        <div class="message-box">
                            <h4>Hakkımızda</h4>
                            <h2>Berber Kardeşlere Hoşgeldiniz</h2>
                            <p class="lead">Uzman kadromuz ile hızlı, kaliteli ve kurumsal iş prensibi ile kuaför bölümünde kaş dizayn, profesyonel makyaj, sir ağda, manikür-pedikür, diğer hizmetlerimizdir.</p>

                            <p>Profesyonel personelimiz ile siz değerli müşterilerimize en iyi hizmeti sunan, modayı çok yakından takip ederek yenilikleri size ulaştıran, hakkımızda yapılan tüm yorumları dikkatlice inceleyerek doğru çizgiden ayrılmayan, her zaman en kaliteli hizmeti sunan bir kuruluş olmak öncelikli vizyonumuz arasındadır. </p>

                            <a href="{{route('about')}}" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Daha Fazla</a>
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
                                <li class="nav-item"><a class="nav-link active" href="#tab_a" data-toggle="tab">Amacımız</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tab_b" data-toggle="tab">Neden Biz</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tab_c" data-toggle="tab">Hakkımızda</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab_a">
                                    <p>16 yıllık tecrübemiz ile Üsküdar’da en kaliteli, profesyonel kuaför markaları arasında yer almak en önemli misyonumuzdur. Profesyonel ekibimizle tüm Üsküdar’lı müşterilerimize hizmet veriyoruz.</p>
                                    <p>Gelişen ve sürekli yenilenen sektördeki çalışmaları yakından takip ederek, gelişmelerin paralelinde Saj Bayan Kuaförü Salonunu sürekli olarak yeni tutmak yine vizyonumuz arasında yer almaktadır.</p>
                                </div>
                                <div class="tab-pane fade" id="tab_b">
                                    <p>Profesyonel personelimiz ile siz değerli müşterilerimize en iyi hizmeti sunan, modayı çok yakından takip ederek yenilikleri size ulaştıran, hakkımızda yapılan tüm yorumları dikkatlice inceleyerek doğru çizgiden ayrılmayan, her zaman en kaliteli hizmeti sunan bir kuruluş olmak öncelikli vizyonumuz arasındadır.</p>
                                    <ul>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>Kullanıcı Tecrubesi</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>Her Türlü Ekipman</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>Harika Dizayn</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>Görsel Etki</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>%100 Senkron</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>Özel Destek</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="tab_c">
                                    <p>Kuaför bölümümüzde size özel saç modellerinin yanı sıra, saçınıza dair her türlü bakım, perma, röfle, balyaj defrize, modern-klasik topuzlar yapılmaktadır. Bu size özel modellerle En güzel günlerinizde sizi farklı kılacak ve özel hissedeceksiniz.</p>
                                </div>
                                <a href="{{route('appointment')}}" class="btn btn-light btn-radius btn-brd grd1 effect-1 col-lg-12">HEMEN RANDEVU AL</a>
                            </div><!-- tab content -->

                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="service-wrap text-center clearfix">
                            <div class="uptop">
                                <a href="{{route('appointment')}}"><img src="{{asset('assets')}}/uploads/barber_service_01.jpg" alt="" class="img-responsive img-rounded alignleft"></a>
                            </div>
                            <h4>Sakal, Bıyık Bakımı</h4>
                            <p>Mesleğiniz,giyim kuşamınız ve toplumdaki statünüzü göz önünde bulundurarak sadece size özel kafa ve yüz şeklinize göre "Anatomik Saç" ve sakal kesimi yapmaktayız.</p>
                        </div><!-- end issue -->

                        <div class="service-wrap text-center clearfix">
                            <div class="uptop">
                                <a href="{{route('appointment')}}"><img src="{{asset('assets')}}/uploads/barber_service_02.jpg" alt="" class="img-responsive img-rounded alignleft"></a>
                            </div>
                            <h4>Detaylı Bakım</h4>
                            <p>Kaş, kulak burun gibi yüz için ufak ama önemli kısımların bakımını yapıyoruz.</p>
                        </div><!-- end issue -->

                        <div class="service-wrap text-center lastchild clearfix">
                            <div class="uptop">
                                <a href="{{route('appointment')}}"><img src="{{asset('assets')}}/uploads/barber_service_03.jpg" alt="" class="img-responsive img-rounded alignleft"></a>
                            </div>
                            <h4>Yüz ve Cilt Bakımı</h4>
                            <p>Kardeşler Berber ile cildinizdeki ölü deriyi ve yağı temizleyip siyah nokta oluşumunu asgari seviyeye indiriyoruz.</p>
                        </div><!-- end issue -->
                    </div><!-- end col -->

                    <div class="col-md-6">
                        <div class="service-wrap text-center clearfix">
                            <div class="uptop">
                                <a href="{{route('appointment')}}"><img src="{{asset('assets')}}/uploads/barber_service_04.jpg" alt="" class="img-responsive img-rounded alignleft"></a>
                            </div>
                            <h4>Stüdyo Çekimleri</h4>
                            <p>Özel günler ve resmi kurumlar için gerekli olan çekimleri profesyonel fotoğrafçı arkadaşlarımızla size sunuyoruz.</p>
                        </div><!-- end issue -->

                        <div class="service-wrap text-center clearfix">
                            <div class="uptop">
                                <a href="{{route('appointment')}}"><img src="{{asset('assets')}}/uploads/barber_service_05.jpg" alt="" class="img-responsive img-rounded alignleft"></a>
                            </div>
                            <h4>Saç/Sakal Şekillendirme</h4>
                            <p>Günlük hayatta ya da özel günlerde sizin için saç ve sakal şekillendirme ve düzenleme yapmaktayız.</p>
                        </div><!-- end issue -->

                        <div class="service-wrap text-center lastchild clearfix">
                            <div class="uptop">
                                <a href="{{route('appointment')}}"><img src="{{asset('assets')}}/uploads/barber_service_06.jpg" alt="" class="img-responsive img-rounded alignleft"></a>
                            </div>
                            <h4>Saç Yıkama</h4>
                            <p>Özel yağlar ve şampuanlarla hassas saçlarınıza masaj ve saç yıkama hizmetini sunuyoruz.</p>
                        </div><!-- end issue -->
                    </div><!-- end col -->
                </div>
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
                    </div>
                </div>
            </div><!-- end container -->
        </div><!-- end section -->
        <div id="barbers" class="section lb">
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
                                <p>Herkese selamlar ben Ahmet Berberci.Bu mekanın kurucusuyum.Kardeşimle beraber bu hizmeti size vermekten onur ve gurur duyuyoruz</p>
                            </div>
                            <div class="t-bottom"></div>
                        </div><!--widget -->
                    </div><!-- end col -->

                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
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
                                <p>Herkese selamlar ben Mehmet Berberci.Bu mekanın kurucu ortağıyım.Kardeşimle beraber bu hizmeti size vermekten onur ve gurur duyuyoruz</p>
                            </div>
                            <div class="t-bottom"></div>
                        </div><!--widget -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->
        <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
        @show
        @include('home._footer')

    </div>
</body>
</html>
