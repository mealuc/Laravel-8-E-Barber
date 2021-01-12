@php
    $setting= \App\Http\Controllers\HomeController::getSetting()
@endphp
<div class="copyrights">
    <div class="container">
        <div class="footer-distributed">
            <div class="footer-left">
                <p class="footer-links">
                    <a href="{{route('home')}}">Anasayfa</a>
                    <a href="#">Blog</a>
                    <a href="#">Ücretlendirme</a>
                    <a href="#">Hakkında</a>
                    <a href="#">SSS</a>
                    <a href="#">İletişim</a>
                </p>
                <p class="footer-social">
                    @if($setting->facebook != null)<a href="{{$setting->facebook}}" target="_blank" class="fa fa-facebook">Facebook</a>@endif
                    @if($setting->twitter != null)<a href="{{$setting->twitter}}" target="_blank" class="fa fa-facebook">Twitter</a>@endif
                    @if($setting->instagram != null)<a href="{{$setting->instagram}}" target="_blank" class="fa fa-facebook">Instagram</a>@endif
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



