@section('title','Appointment - '.$setting->title)
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
                                <h1>Randevu</h1>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb">
                                <li class="active">Siz ne zaman müsaitseniz biz ozaman uygunuz...</li>
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
                    <div id="appointment" class="section wb">
                        <div class="container">
                            <div class="section-title row text-center">
                                <div class="col-md-8 offset-md-2">
                                    <h3>Randevu Al</h3>
                                </div>
                            </div><!-- end title -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="contact_form">
                                        <div id="message"></div>
                                        <form role="form" action="{{route('admin_appointment_add')}}" method="post">
                                            @csrf
                                            <fieldset class="row row-fluid">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <select id="payment"name="payment" class="form-control">
                                                        <option value="Seçilmedi">Ödeme Şekli</option>
                                                        <option value="Online">Online</option>
                                                        <option value="Nakit">Nakit</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <select id="product_id"name="product_id" class="form-control">
                                                        @foreach($datalist as $rs)
                                                            <option value="{{$rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <select id="date" name="date" class="form-control">
                                                        <option value="Seçilmedi">Gün Seçiniz</option>
                                                        <option value="Pazartesi">Pazartesi</option>
                                                        <option value="Salı">Salı</option>
                                                        <option value="Çarşamba">Çarşamba</option>
                                                        <option value="Perşembe">Perşembe</option>
                                                        <option value="Cuma">Cuma</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <select id="time"name="time" class="form-control">
                                                        <option value="Seçilmedi">Saat Seçiniz</option>
                                                        <option value="10:00">10:00</option>
                                                        <option value="11:00">11:00</option>
                                                        <option value="12:00">12:00</option>
                                                        <option value="13:00">13:00</option>
                                                        <option value="14:00">14:00</option>
                                                        <option value="15:00">15:00</option>
                                                        <option value="16:00">16:00</option>
                                                        <option value="17:00">17:00</option>
                                                        <option value="18:00">18:00</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <textarea class="form-control" name="note" id="note" rows="6" placeholder="Eklemek istedikleriniz..."></textarea>
                                                </div>
                                                <div class="form-btn text-center">
                                                    <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block subt">Randevu Al</button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end container -->
                    </div><!-- end section -->
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
