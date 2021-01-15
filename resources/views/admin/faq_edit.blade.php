@extends('layouts.admin')
@section('title','Edit Frequently Asked Question')
@section('content')
    <div id="wrapper">
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Edit FAQ </h1>
                        <div class="panel panel-info">
                            <div class="panel-body">
                                <form role="form" action="{{route('admin_faq_update',['id'=>$data->id])}})}}"method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Question</label>
                                        <input class="form-control" type="text" value="{{$data->question}}" name="question">
                                    </div>
                                    <div class="form-group">
                                        <label>Answer</label>
                                        <textarea id="Answer" name="answer" value="{{$data->answer}}">{{$data->answer}}</textarea>
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
                                            <option selected="selected">{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update FAQ</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
