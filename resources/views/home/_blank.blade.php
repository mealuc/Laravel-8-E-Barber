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
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="all-page-bar">
            <div class="container">
                <div class="row">

                </div>
            </div>
        </div><!-- end all-page-bar -->

        <div class="section wb">
            <div class="container">

            </div><!-- end container -->
        </div><!-- end section -->

        <div id="testimonials" class="parallax section db parallax-inner-bg">
            <div class="container">

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
