@extends('layouts.admin')
@section('title','Add Frequently Asked Question')
@section('js')
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- include summernote css/js -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection
@section('content')
    <div id="wrapper">
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Product Add</h1>
                        <div class="panel panel-info">
                            <div class="panel-body">
                                <form role="form" action="{{route('admin_faq_store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Question</label>
                                        <input class="form-control" type="text" name="question">
                                    </div>
                                    <div class="form-group">
                                        <label>Answer</label>
                                        <textarea id="Answer" name="answer"></textarea>
                                        <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#Answer' ) )
                                            .catch( error => {
                                                console.error( error );
                                            } );
                                         </script>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add FAQ</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <!-- /. ROW  -->
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
@endsection
