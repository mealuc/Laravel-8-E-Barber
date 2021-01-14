@section('title','References - '. $setting->title)
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
                                <h1>Referanslar</h1>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb">
                                <li class="active">Bizimle Çalışanlar</li>
                            </ol>
                        </div>
                        <!-- .title end -->
                    </div>
                </div>
            </div>
        </div><!-- end all-page-bar -->
            <div class="container">
                <hr class="hr1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            {!! $setting->references !!}
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
                <div class="row text-center">
                    <div class="col-lg-12">
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
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
