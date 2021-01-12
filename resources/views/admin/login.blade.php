<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Responsive Bootstrap Advance Admin Template</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="{{asset('assets')}}/admin/assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- FONTAWESOME STYLES-->
    <link href="{{asset('assets')}}/admin/assets/css/font-awesome.css" rel="stylesheet"/>
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
</head>
<body style="background-color: #e2e2e2;">
<div class="container">
    <div class="row text-center " style="padding-top:100px;">
        <div class="col-md-12">
            <img src="{{asset('assets')}}/admin/assets/img/logo-invoice.png"/>
        </div>
    </div>
    <div class="row ">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
            <div class="panel-body">
                <form role="form" action="{{route('logincheck')}}" method="post" class="form-login">
                    @csrf
                    <hr/>
                    <br/>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email "/>
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password"id="password" name="password"  class="form-control" placeholder="Şifre"/>
                    </div>
                    <div class="form-group">
                        <label class="checkbox-inline">
                            <input type="checkbox"/> Remember me
                        </label>
                        <span class="pull-right">
                            <a href="index.html">Forget password ? </a>
                        </span>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary ">Login</button>
                    </div>
                    <hr/>
                    Not register ? <a href="{{route('register')}}">Click Here</a> or go to <a href="{{route('home')}}">Home</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
