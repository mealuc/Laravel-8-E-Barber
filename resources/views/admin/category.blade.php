@extends('layouts.admin')
@section('title','Category List')
@section('content')
    <div id="wrapper">
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">CATEGORY</h1>
                        <a href="{{route('admin_category_add')}}" class="btn btn-primary" type="button">Add Category</a>
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
                                                <th>Parent</th>
                                                <th>Title</th>
                                                <th>Keywords</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($datalist as $rs)
                                                <tr>
                                                    <td>{{$rs->id}}</td>
                                                    <td>{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</td>
                                                    <td>{{$rs->title}}</td>
                                                    <td>{{$rs->keywords}}</td>
                                                    <td>{{$rs->description}}</td>
                                                    <td>{{$rs->status}}</td>
                                                    <td class="text-center"><a href="{{route('admin_category_edit',['id'=>$rs->id])}}">Edit</a> /
                                                    <a href="{{route('admin_category_delete',['id'=>$rs->id])}}" onclick="return confirm('It will be deleted! Are you sure?')">Delete</a></td>
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
<!-- -->
