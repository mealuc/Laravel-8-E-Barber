@extends('layouts.admin')
@section('title','User List')
@section('content')
    <div id="wrapper">
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Users</h1>
                        @include('home.message')
                    </div>
                </div>
                <div class="alert alert-info">
                    <div class="row">
                        <div class="col-md-12">
                            <!--    Hover Rows  -->
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>Roles</th>
                                                <th style="align-content: center"colspan="2"class="text-center">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($datalist as $rs)
                                                <tr>
                                                    <td>{{$rs->id}}</td>
                                                    <td>
                                                        @if($rs->id)
                                                            <img src="{{Storage::url(Auth::user()->profile_photo_path)}}"class="img-circle elevation-2"alt="User Image" height="70">@endif
                                                    </td>
                                                    <td>{{$rs->name}}</td>
                                                    <td>{{$rs->email}}</td>
                                                    <td>{{$rs->phone}}</td>
                                                    <td>{{$rs->address}}</td>
                                                    <td>
                                                        @foreach($rs->roles as $row)
                                                        "{{$row->name}}"
                                                        @endforeach
                                                        <a href="{{route('admin_user_roles',['id' => $rs->id])}}" onclick="return !window.open(this.href, '','top=200 left=400 width=800,height=600')">
                                                            O
                                                            </a>
                                                    </td>
                                                    <td class="text-center"><a href="{{route('admin_user_edit',['id'=>$rs->id])}}">Edit</a></td>
                                                </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- End  Hover Rows  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
@endsection
@section('footer')
@endsection
