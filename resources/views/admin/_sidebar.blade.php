<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    @if(Auth::user()->profile_photo_path)
                        <img src="{{Storage::url(Auth::user()->profile_photo_path)}}"class="img-circle elevation-2"alt="User Image">
                    @endif
                    <div class="inner-text">
                        {{Auth::user()->name}}
                        <br />
                        <small>Son Giriş : Şimdi</small>
                    </div>
                </div>
            </li>
            <li>
                <a class="active-menu" href="index.html"><i class="fa fa-dashboard "></i>Dashboard</a>
            </li>
            <li>
                <a href="{{route('admin_category')}}"><i class="fa fa-search "></i>Category</a>
            </li>
            <li>
                <a href="{{route('admin_products')}}"><i class="fa fa-scissors "></i>Products</a>
            </li>
            <li>
                <a href="{{route('admin_setting')}}"><i class="fa fa-save "></i>Settings</a>
            </li>
            <li>
                <a href="{{route('admin_message')}}"><i class="fa fa-medkit "></i>Contact Messages</a>
            </li>
            <li>
                <a href="{{route('admin_faq')}}"><i class="fa fa-desktop "></i>FAQ</a>
            </li>
            <li>
                <a href="{{route('admin_user')}}"><i class="fa fa-anchor "></i>Users</a>
            </li>
            <li>
                <a href="{{route('admin_appointment')}}"><i class="fa fa-automobile "></i>Appointments</a>
            </li>
        </ul>

    </div>

</nav>
