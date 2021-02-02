@section('title','User Message Edit')
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
                    <div class="panel panel-default">
                        <div class="panel-body">
                            @include('home.message')
                            <div class="contact_form">
                                <form role="form" action="{{route('user_message_update',['id'=>$data->id])}}" method="post">
                                    @csrf
                                    <fieldset class="row row-fluid">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="text"value="{{$data->name}}" name="name" class="form-control" placeholder="Ad & Soyad">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="phone"value="{{$data->phone}}" id="phone" class="form-control" placeholder="Telefon">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="email" name="email"value="{{$data->email}}" id="email" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="subject"value="{{$data->subject}}" id="subject" class="form-control" placeholder="Konu">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <textarea class="form-control"value="{{$data->message}}" name="message" id="message" rows="6" placeholder="Mesajınızı buraya yazın..."></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block subt">Mesajı Düzenle</button>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
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
