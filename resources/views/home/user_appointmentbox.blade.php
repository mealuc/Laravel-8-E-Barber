@section('title','User Appointment')
@include('home.head_css')
<body class="barber_version">
@include('home._loader')
@include('home._header')
@section('content')
    <!-- Page Content -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    @include('home.usermenu')
                </div>
                <div class="col-md-10">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>İsim</th>
                                        <th>İşlem</th>
                                        <th>Email</th>
                                        <th>Telefon</th>
                                        <th>Tarih</th>
                                        <th>Saat</th>
                                        <th>Ücret</th>
                                        <th>Ödeme Şekli</th>
                                        <th>Not</th>
                                        <th>Durum</th>
                                        <th style="align-content: center"colspan="3" class="text-center">Düzenleme</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($datalist as $rs)
                                        <tr>
                                            <td>{{$rs->name}}</td>
                                            <td>{{$rs->title}}</td>
                                            <td>{{$rs->email}}</td>
                                            <td>{{$rs->phone}}</td>
                                            <td>{{$rs->date}}</td>
                                            <td>{{$rs->time}}</td>
                                            <td>{{$rs->price}}</td>
                                            <td>{{$rs->payment}}</td>
                                            <td>{{$rs->note}}</td>
                                            <td>{{$rs->status}}</td>
                                            <td class="text-center"><a href="{{route('admin_appointment_edit',['id'=>$rs->id])}}">Düzenle</a> /
                                                <a href="{{route('admin_appointment_delete',['id'=>$rs->id])}}" onclick="return confirm('It will be deleted! Are you sure?')">İptal Et</a></td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!-- end section -->
            </div>
        </div>
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
