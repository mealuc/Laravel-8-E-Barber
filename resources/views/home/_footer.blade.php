@php
    $setting= \App\Http\Controllers\HomeController::getSetting()
@endphp
<div class="copyrights">
    <div class="container">
        <div class="footer-distributed">
            <div class="footer-left">
                <p class="footer-links">
                    <a href="{{route('home')}}">Anasayfa</a>
                    <a href="{{route('services')}}">Ücretlendirme</a>
                    <a href="{{route('about')}}">Hakkında</a>
                    <a href="{{route('faq')}}">SSS</a>
                    <a href="{{route('contact')}}">İletişim</a>
                </p>
                <p>
                <div class="">
                    @if($setting->facebook != null)<a href="{{$setting->facebook}}" target="_blank" class="fa fa-facebook">Facebook</a>@endif
                    @if($setting->twitter != null)<a href="{{$setting->twitter}}" target="_blank" class="fa fa-facebook">Twitter</a>@endif
                    @if($setting->instagram != null)<a href="{{$setting->instagram}}" target="_blank" class="fa fa-facebook">Instagram</a>@endif
                </div>
                </p>
                <p>
                <div class="footer-company-name">
                    Tüm Hakları Gizlidir. &copy; 2021 <a href="#">{{$setting->company}}</a> Design By :
                    <a href="{{route('home')}}">Emre Aluç</a>
                </div>
                </p>
            </div>
        </div>
    </div><!-- end container -->
</div><!-- end copyrights -->

<!-- ALL JS FILES -->
<script src="{{asset('assets')}}/js/all.js"></script>
<script src="{{asset('assets')}}/js/responsive-tabs.js"></script>
<!-- ALL PLUGINS -->
<script src="{{asset('assets')}}/js/custom.js"></script>



