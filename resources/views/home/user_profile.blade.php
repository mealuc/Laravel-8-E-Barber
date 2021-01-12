@section('title','User Profile')


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
                    @include('profile.show')
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
