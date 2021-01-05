@extends('layouts.admin')
@section('title','Edit Product')
@section('content')
    <div id="wrapper">
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Edit Product </h1>
                        <div class="panel panel-info">
                            <div class="panel-body">
                                <form role="form" action="{{route('admin_product_update',['id'=>$data->id])}})}}"method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="form-control" name="category_id">
                                            @foreach($datalist as $rs)
                                                <option value="{{$rs->id}}" @if ($rs->id==$data->category_id) selected="selected" @endif >{{$rs->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input class="form-control" type="text" value="{{$data->title}}" name="title">
                                    </div>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input class="form-control" type="number" value="{{$data->price}}" name="price">
                                    </div>
                                    <div class="form-group">
                                        <label>Tax</label>
                                        <input class="form-control" type="number" value="{{$data->tax}}" name="tax">
                                    </div>
                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <input class="form-control" type="number" value="{{$data->quantity}}" name="quantity">
                                    </div>
                                    <div class="form-group">
                                        <label>Minquantity</label>
                                        <input class="form-control" type="number" value="{{$data->minquantity}}" name="minquantity">
                                    </div>
                                    <div class="form-group">
                                        <label>Detail</label>
                                        <input class="form-control" type="text" value="{{$data->detail}}" name="detail">
                                    </div>
                                    <div class="form-group">
                                        <label>Keywords</label>
                                        <input class="form-control" type="text" value="{{$data->keywords}}" name="keywords">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input class="form-control" type="text" value="{{$data->description}}" name="description">
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option selected="selected">{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Product</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
