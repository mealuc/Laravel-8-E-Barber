@extends('layouts.admin')
@section('title','Product List')
@section('content')
    <div id="wrapper">
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Product</h1>
                        <a href="{{route('admin_product_add')}}" class="btn btn-primary" type="button">Add Product</a>
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
                                                <th>Category</th>
                                                <th>Title</th>
                                                <th>Price</th>
                                                <th>Image</th>
                                                <th>Tax</th>
                                                <th>Quantity</th>
                                                <th>Minquantity</th>
                                                <th>Keywords</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th style="align-content: center"colspan="2">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($datalist as $rs)
                                                <tr>
                                                    <td>{{$rs->id}}</td>
                                                    <td>{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                                                    <td>{{$rs->title}}</td>
                                                    <td>{{$rs->price}}</td>
                                                    <td>
                                                        @if($rs->image)
                                                            <img src="{{Storage::url($rs->image)}}"height="50"alt=""@endif
                                                    </td>
                                                    <td>{{$rs->tax}}</td>
                                                    <td>{{$rs->quantity}}</td>
                                                    <td>{{$rs->minquantity}}</td>
                                                    <td>{{$rs->keywords}}</td>
                                                    <td>{{$rs->description}}</td>
                                                    <td>{{$rs->status}}</td>
                                                    <td><a href="{{route('admin_product_edit',['id'=>$rs->id])}}">Edit</a></td>
                                                    <td><a href="{{route('admin_product_delete',['id'=>$rs->id])}}" onclick="return confirm('It will be deleted! Are you sure?')">Delete</a></td>
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
