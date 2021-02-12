@section('title','Hizmet Detay - '.$setting->title)
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
        <div class="all-page-bar">
        </div><!-- end all-page-bar -->
        <div class="section wb">
            <div class="container">
                <div>
                    <center><h1>{{$data->title}}</h1><img src="{{Storage::url($data->image)}}"class="img-circle elevation-2"alt="Product Image"height="400px;width=400px;" style="align-self: center;align-items: center;align-content: center"></center>
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="page-head-line">Hizmet Bilgileri</h1>
                                    <div class="panel panel-info">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label>Numara:</label>
                                                {{$data->id}}
                                            </div>
                                            <div class="form-group">
                                                <label>Kategori:</label>
                                                {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category,$data->category->title)}}
                                            </div>
                                            <div class="form-group">
                                                <label>İsim:</label>
                                                {{$data->title}}
                                            </div>
                                            <div class="form-group">
                                                <label>Fiyat:</label>
                                                {{$data->price}} ₺
                                            </div>
                                            <div class="form-group">
                                                <label>Açıklama:</label>
                                                {{$data->description}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{route('appointment')}}" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">HEMEN RANDEVU AL</a>
                        </div>
                    </div>
                </div>
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
