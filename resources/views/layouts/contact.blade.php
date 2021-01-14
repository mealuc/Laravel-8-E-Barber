@section('title',$setting->title)
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
                                <h1>Bize Yazın</h1>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb">
                                <li class="active">İletişim</li>
                            </ol>
                        </div>
                        <!-- .title end -->
                    </div>
                </div>
            </div>
        </div><!-- end all-page-bar -->
        @include('home.message')
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        {!! $setting->contact !!}
                    </div>
                    <div class="col-md-8">
                        <div class="section-title row text-center">
                            <div class="col-md-8 offset-md-2">
                                <small>Her Zaman,Her Yerde</small>
                                <h3>İletişim Bilgileri</h3>
                            </div>
                        </div><!-- end title -->
                        <div class="contact_form">
                            <form role="form" action="{{route('sendmessage')}}" method="post">
                                @csrf
                                <fieldset class="row row-fluid">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="name" class="form-control" placeholder="Ad & Soyad">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Telefon">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="subject" id="subject" class="form-control" placeholder="Konu">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <textarea class="form-control" name="message" id="message" rows="6" placeholder="Mesajınızı buraya yazın..."></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block subt">Gönder</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- end container -->
        </div><!-- end section -->
    </div>
@show
@include('home._footer')
<!-- ALL JS FILES -->
<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
<!-- ALL JS FILES -->
<script src="{{asset('assets')}}/js/all.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script src="{{asset('assets')}}/js/map.js"></script>
<!-- ALL PLUGINS -->
<script src="{{asset('assets')}}/js/custom.js"></script>
</body>
</html>
