@section('title','SSS - '.$setting->title)
@section('js')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#accordion" ).accordion();
        } );
    </script>
@endsection
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
                <div id="accordion">
                    @foreach($datalist as $rs)
                        <h3>-{{$rs->question}}</h3>
                        <div>
                            <p>{!!$rs->answer!!}</p>
                        </div>
                    @endforeach
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
