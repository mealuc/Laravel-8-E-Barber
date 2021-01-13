@extends('layouts.admin')
@section('title','Edit Message')
@section('content')
    <div id="wrapper">
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Edit Message </h1>
                        <div class="panel panel-info">
                            <div class="panel-body">
                                @include('home.message')
                                <form role="form" action="{{route('admin_message_update',['id'=>$data->id])}})}}"method="post" enctype="multipart/form-data">
                                    @csrf
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
                                        <label>Subject:</label>
                                        {{$data->subject}}
                                    </div>
                                    <div class="form-group">
                                        <label>Message:</label>
                                        {{$data->message}}
                                    </div>
                                    <div class="form-group">
                                        <label>Admin Notes:</label>
                                        <textarea class="form-control" type="text" value="{{$data->note}}" name="note"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Status:</label>
                                        {{$data->status}}
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
