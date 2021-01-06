@extends('layouts.admin')
@section('title','Edit Setting')
@section('content')
    <div id="wrapper">
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Edit Setting </h1>
                        <div class="panel panel-info">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <form role="form" action="{{route('admin_setting_update')}}"method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="panel-heading">
                                            SETTINGS
                                        </div>
                                        <div class="panel-body">
                                            <ul class="nav nav-pills">
                                                <li class="active"><a href="#general-pills" id="general" data-toggle="tab">General</a>
                                                </li>
                                                <li class=""><a href="#smtpinfo-pills" id="smtpinfo" data-toggle="tab">Smtp Email</a>
                                                </li>
                                                <li class=""><a href="#social-pills" id="social" data-toggle="tab">Social Media</a>
                                                </li>
                                                <li class=""><a href="#aboutus-pills" id="aboutus" data-toggle="tab">About Us</a>
                                                </li>
                                                </li>
                                                <li class=""><a href="#contact-pills" id="contact" data-toggle="tab">Contact</a>
                                                </li>
                                                </li>
                                                <li class=""><a href="#references-pills" id="references" data-toggle="tab">References</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade active in" id="general-pills">
                                                    <h4>General</h4>
                                                    <input class="form-control" id="id" type="hidden" value="{{$data->id}}" name="id">
                                                    <div class="form-group">
                                                        <label>Title</label>
                                                        <input class="form-control" type="text" value="{{$data->title}}" name="title">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Company</label>
                                                        <input class="form-control" type="text" value="{{$data->company}}" name="company">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <input class="form-control" type="text" value="{{$data->address}}" name="address">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Phone</label>
                                                        <input class="form-control" type="number" value="{{$data->phone}}" name="phone">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Fax</label>
                                                        <input class="form-control" type="text" value="{{$data->fax}}" name="fax">
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
                                                        <label>Email</label>
                                                        <input class="form-control" type="text" value="{{$data->email}}" name="email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        <select class="form-control" name="status">
                                                            <option selected="selected">{{$data->status}}</option>
                                                            <option>True</option>
                                                            <option>False</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="smtpinfo-pills">
                                                    <h4>Smtp Email</h4>
                                                    <div class="form-group">
                                                        <label>Smtp Server</label>
                                                        <input class="form-control" type="text" value="{{$data->smtpserver}}" name="smtpserver">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Smtp Email</label>
                                                        <input class="form-control" type="text" value="{{$data->smtpemail}}" name="smtpemail">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Smtp Password</label>
                                                        <input class="form-control" type="password" value="{{$data->smtppassword}}" name="smtppassword">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Smtp Port</label>
                                                        <input class="form-control" type="number" value="{{$data->smtpport}}" name="smtpport">
                                                    </div>                                        </div>
                                                <div class="tab-pane fade" id="social-pills">
                                                    <h4>Social Media</h4>
                                                    <div class="form-group">
                                                        <label>Facebook</label>
                                                        <input class="form-control" type="text" value="{{$data->facebook}}" name="facebook">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Instagram</label>
                                                        <input class="form-control" type="text" value="{{$data->instagram}}" name="instagram">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Twitter</label>
                                                        <input class="form-control" type="text" value="{{$data->twitter}}" name="twitter">
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="aboutus-pills">
                                                    <div class="form-group">
                                                        <label>About Us</label>
                                                        <textarea id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
                                                    </div>                                        </div>
                                                <div class="tab-pane fade" id="contact-pills">
                                                    <div class="form-group">
                                                        <label>Contact</label>
                                                        <textarea id="contact" name="contact">{{$data->contact}}</textarea>
                                                    </div>                                        </div>
                                                <div class="tab-pane fade" id="references-pills">
                                                    <div class="form-group">
                                                        <label>References</label>
                                                        <textarea id="references" name="references">{{$data->references}}</textarea>
                                                        <script>
                                                            $(document).ready(function() {
                                                                $('#aboutus').summernote();
                                                                $('#contact').summernote();
                                                                $('#references').summernote();
                                                            });
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update Setting</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
