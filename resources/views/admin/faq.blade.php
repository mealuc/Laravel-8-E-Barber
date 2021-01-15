@extends('layouts.admin')
@section('title','Frequently Asked Question List')
@section('content')
    <div id="wrapper">
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Frequently Asked Question</h1>
                        @include('home.message')
                        <a href="{{route('admin_faq_add')}}" class="btn btn-primary" type="button">Add Frequently Asked Question</a>
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
                                                <th>Question</th>
                                                <th>Answer</th>
                                                <th>Status</th>
                                                <th style="align-content: center"colspan="2" class="text-center">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($datalist as $rs)
                                                <tr>
                                                    <td>{{$rs->id}}</td>
                                                    <td>{{$rs->question}}</td>
                                                    <td>{!!$rs->answer!!}</td>
                                                    <td>{{$rs->status}}</td>
                                                    <td class="text-center"><a href="{{route('admin_faq_edit',['id'=>$rs->id])}}">Edit</a> /
                                                    <a href="{{route('admin_faq_delete',['id'=>$rs->id])}}" onclick="return confirm('It will be deleted! Are you sure?')">Delete</a>
                                                    </td>
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
