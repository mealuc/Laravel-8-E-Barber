<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{asset('assets')}}/images/logo.png" alt="" />
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
            <div class="category-nav" id="navbars-rs-food">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Anasayfa</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('services')}}">Servislerimiz</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('about')}}">Hakkımızda</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('barbers')}}">Berberlerimiz</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('appoint')}}">Randevu</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">İletişim</a></li>
                    <li class="nav-item"><a class="nav-link" href="layouts/faq.html">SSS</a></li>
                </ul>
            </div>
            <div>
                <li class="header-account dropdown default-dropdown">
                    @auth
                        <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                            <a href="#"><strong class="text-uppercase">{{Auth::user()->name}}</strong></a>
                        </div>
                <li class="nav-item"><a href="{{route('myprofile')}}" class="nav-link"  title="Login">Hesabım</a></li>
                <li class="nav-item"><a href="{{route('logout')}}" class="nav-link"  title="Logout">Çıkış</a></li>
                </li>
                @endauth
                @guest
                    <li class="nav-item"><a href="{{route('login')}}" class="nav-link"  title="Login">Giriş</a></li>
                    <li class="nav-item"><a href="{{route('register')}}" class="nav-link"  title="Register">Üye Ol</a></li>
                @endguest
            </div>
        </div>
    </nav>
</header>
