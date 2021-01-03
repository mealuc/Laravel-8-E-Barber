@extends('layouts.admin')
@section('title','Category List')
@section('content')
    <div id="wrapper">
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">CATEGORY</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>
                    </div>

                <!-- /. ROW  -->
                </div>

                        <div class="alert alert-info">
                            <div class="row">
                                <div class="col-md-12">
                                    <!--    Hover Rows  -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Hover Rows
                                        </div>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Parent</th>
                                                        <th>Title</th>
                                                        <th>Status</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach ($datalist as $rs)
                                                    <tr>
                                                        <td>{{$rs->id}}</td>
                                                        <td>{{$rs->parent_id}}</td>
                                                        <td>{{$rs->title}}</td>
                                                        <td>{{$rs->status}}</td>
                                                        <td>Edit</td>
                                                        <td>Delete</td>
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
