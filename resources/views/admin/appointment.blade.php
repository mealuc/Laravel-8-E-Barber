@extends('layouts.admin')
@section('title','Appointments')
@section('content')
    <div id="wrapper">
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line text-center">Appointments</h1>
                    </div>
                </div>
                @include('home.message')
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
                                                <th>Name</th>
                                                <th>Job</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Price</th>
                                                <th>Payment</th>
                                                <th>Note</th>
                                                <th>Status</th>
                                                <th style="align-content: center"colspan="3" class="text-center">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($datalist as $rs)
                                                <tr>
                                                    <td>{{$rs->id}}</td>
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
                                                    <td class="text-center"><a href="{{route('admin_appointment_edit',['id'=>$rs->id])}}">Edit</a> /
                                                    <a href="{{route('admin_appointment_delete',['id'=>$rs->id])}}" onclick="return confirm('It will be deleted! Are you sure?')">Delete</a></td>
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
