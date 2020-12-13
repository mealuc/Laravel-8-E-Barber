<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    @yield('css')
    @yield('js')
</head>
<body>

<div class="jumbotron text-center">
    <h1>Header</h1>
    <p>Üst Sayfa</p>
    @yield('header')
</div>

<div class="container">
    <div class="row">
        @section('sidebar')
            <div class="col-sm-4 col-lg-3">
                <h3>Sol Bar</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
        @show
        @section('content')
            <div class="col-sm-4">
                <h3>Orta Bar</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
        @show

            <div class="col-sm-4">
                <h3>Sağ Bar</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
    </div>
</div>
<div class="jumbotron text-center">
    <h1>Footer</h1>
    <p>En Alt Sayfa</p>
    @yield('footer')
</div>

</body>
</html>
