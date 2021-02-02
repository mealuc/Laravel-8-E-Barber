@extends('layouts.admin')
@section('title','Edit Users')
@section('content')
    <div id="wrapper">
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Edit Users </h1>
                        <div class="panel panel-info">
                            <div class="panel-body">
                                <form role="form" action="{{route('admin_user_update',['id'=>$data->id])}})}}"method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input class="form-control" type="text" value="{{$data->name}}" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="email" value="{{$data->email}}" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input class="form-control" type="number" value="{{$data->phone}}" name="phone">
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input class="form-control" type="text" value="{{$data->address}}" name="address">
                                    </div>
                                    <div class="form-group">
                                        <label>Roles:</label>
                                        @foreach($data->roles as $row)
                                            "{{$row->name}}"
                                        @endforeach
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input class="form-control" type="file" name="image">
                                        @if ($data->image)
                                            <img src="{{Storage::url($data->image)}}"height="100"alt=""
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update User</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
