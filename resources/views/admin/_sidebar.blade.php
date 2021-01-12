<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="{{asset('assets')}}/admin/assets/img/user.png" class="img-thumbnail" />

                    <div class="inner-text">
                        Jhon Deo Alex
                        <br />
                        <small>Son Giriş : 2 Gün Önce </small>
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
        </ul>

    </div>

</nav>
