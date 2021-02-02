@extends('layouts.user_show')
@section('title','Edit Users')
@section('content')
    <div id="wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">User Information</h1>
                    @include('home.message')
                    <img src="{{Storage::url(Auth::user()->profile_photo_path)}}"class="img-circle elevation-2"alt="User Image"height="200">
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <div class="form-group">
                                <label>ID:</label>
                                {{$data->id}}
                            </div>
                            <div class="form-group">
                                <label>Name:</label>
                                {{$data->name}}
                            </div>
                            <div class="form-group">
                                <label>Email:</label>
                                {{$data->email}}
                            </div>
                            <div class="form-group">
                                <label>Phone:</label>
                                {{$data->phone}}
                            </div>
                            <div class="form-group">
                                <label>Address:</label>
                                {{$data->address}}
                            </div>
                            <div class="form-group">
                                <label>Roles:</label>
                                @foreach($data->roles as $row)
                                    "{{$row->name}}"
                                @endforeach
                            </div>
                            <div class="form-group">
                                <label>Delete Role</label>
                                @foreach($data->roles as $row)
                                    <tr>
                                        "
                                        <td>
                                            {{$row->name}}</td>
                                        <td>
                                            <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}}" onclick="return confirm('It will be deleted! Are you sure?')">X</a>
                                        </td>
                                        "
                                    </tr>
                                @endforeach
                            </div>
                            <label>Add Role</label>
                            <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id])}}"method="post" enctype="multipart/form-data">
                                @csrf
                                <div>
                                    <select name="roleid">
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}">{{$rs->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Add Role</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
