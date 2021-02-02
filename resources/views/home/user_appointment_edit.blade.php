@section('title','User Appointment Edit')
@include('home.head_css')
<body class="barber_version">
@include('home._loader')
@include('home._header')
@section('content')
    <!-- Page Content -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    @include('home.usermenu')
                </div>
                <div class="col-md-10">
                    <div class="contact_form">
                        @include('home.message')
                        <div id="message"></div>
                        <form role="form" action="{{route('admin_appointment_update',['id'=>$data->id])}}" method="post">
                            @csrf
                            <fieldset class="row row-fluid">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <select id="payment"name="payment" class="form-control">
                                        <option selected="selected">{{$data->payment}}</option>
                                        <option value="Online">Online</option>
                                        <option value="Cash">Nakit</option>
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
                                    <select id="date" name="date" class="form-control" >
                                        <option selected="selected">{{$data->date}}</option>
                                        <option value="Monday">Pazartesi</option>
                                        <option value="Tuesday">Salı</option>
                                        <option value="Wednesday">Çarşamba</option>
                                        <option value="Thursday">Perşembe</option>
                                        <option value="Friday">Cuma</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <select id="time"name="time" class="form-control">
                                        <option selected="selected">{{$data->time}}</option>
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
                                    <textarea class="form-control" value="{{$data->note}}" name="note" id="note" rows="6" placeholder="Düzeltmek istedikleriniz..."></textarea>
                                </div>
                                <div class="form-btn text-center">
                                    <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block subt">Randevuyu Düzenle</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div><!-- end section -->
            </div>
        </div>
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
