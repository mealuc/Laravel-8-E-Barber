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

        <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
        <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
        @auth
            <a href="#" class="d-block">{{Auth::user()->name}}</a>
            <a href="{{route('logout')}}" class="btn btn-info btn-lg"  title="Logout"><i class="glyphicon glyphicon-log-out"></i> Logout</a>
        @endauth
    </div>
</nav>
<!-- /. NAV TOP  -->
