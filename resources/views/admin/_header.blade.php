<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{route('admin')}}">AİLE BERBERİ</a>
    </div>

    <div class="header-right" class="info">
        @auth
            <a href="#" class="d-block">{{Auth::user()->name}}</a>
            <a href="{{route('admin_logout')}}" class="btn btn-info btn-lg"  title="Logout"><i class="glyphicon glyphicon-log-out"></i> Logout</a>
        @endauth
    </div>
</nav>
<!-- /. NAV TOP  -->
