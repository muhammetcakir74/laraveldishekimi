@extends('layouts.admin')

@section('title','Edit Setting')

@section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- include summmernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection

@section('content')
        <section class="content" style="margin-top: -3rem;margin-right: 3rem;margin-left: 3rem;margin-bottom: 2rem">
            <div class="card">
                <div class="card-header bg-dark">
                    <h2 class="card-title text-white text-center">
                        Edit Settings
                    </h2>
                </div>



                <div class="nav-wrapper">
                    <form action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>General</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>Contacts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="ni ni-calendar-grid-58 mr-2"></i>SMTP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-4-tab" data-toggle="tab" href="#tabs-icons-text-4" role="tab" aria-controls="tabs-icons-text-4" aria-selected="false"><i class="ni ni-planet mr-2"></i>Social</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-5-tab" data-toggle="tab" href="#tabs-icons-text-5" role="tab" aria-controls="tabs-icons-text-5" aria-selected="false"><i class="ni ni-email-83 mr-2"></i>About Us/Contact/References</a>
                        </li>
                    </ul>
                </div>
                <div class="card shadow">
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">


                                <div class="form-group">
                                    <input type="hidden" value="{{$data->id}}" class="form-control" id="id" name="id">
                                    <label><b>Title</b></label>
                                    <input type="text" class="form-control" value="{{$data->title}}" id="title" name="title">
                                </div>
                                <div class="form-group">
                                    <label><b>Keywords</b></label>
                                    <input type="text" class="form-control" id="keywords" value="{{$data->keywords}}" name="keywords">
                                </div>
                                <div class="form-group">
                                    <label><b>Description</b></label>
                                    <input type="text" class="form-control" id="description" value="{{$data->description}}" name="description">
                                </div>
                                <div class="form-group">
                                    <label><b>Company</b></label>
                                    <input type="text" class="form-control" id="company" value="{{$data->company}}" name="company">
                                </div>


                            </div>
                            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">



                                <div class="form-group">
                                    <label><b>Address</b></label>
                                    <input type="text" value="{{$data->address}}" class="form-control" id="address" name="address">
                                </div>
                                <div class="form-group">
                                    <label><b>Phone</b></label>
                                    <input type="text" value="{{$data->phone}}" class="form-control" id="phone" name="phone">
                                </div>

                                <div class="form-group">
                                    <label><b>Fax</b></label>
                                    <input type="text" value="{{$data->fax}}" class="form-control" id="fax" name="fax">
                                </div>

                                <div class="form-group">
                                    <label><b>Email</b></label>
                                    <input type="email" value="{{$data->email}}" class="form-control" id="email" name="email">
                                </div>


                            </div>
                            <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">

                                <div class="form-group">
                                    <label><b>Smtp Server</b></label>
                                    <input type="text" value="{{$data->smtpserver}}" class="form-control" id="smtpserver" name="smtpserver">
                                </div>

                                <div class="form-group">
                                    <label><b>Smtp Email</b></label>
                                    <input type="email" value="{{$data->smtpemail}}" class="form-control" id="smtpemail" name="smtpemail">
                                </div>

                                <div class="form-group">
                                    <label><b>Smtp Password</b></label>
                                    <input type="text" value="{{$data->smtppassword}}" class="form-control" id="smtppassword" name="smtppassword">
                                </div>

                                <div class="form-group">
                                    <label><b>Smtp Port</b></label>
                                    <input type="number" value="{{$data->smtpport}}" class="form-control" id="smtpport" name="smtpport">
                                </div>



                            </div>
                            <div class="tab-pane fade" id="tabs-icons-text-4" role="tabpanel" aria-labelledby="tabs-icons-text-4-tab">

                                <div class="form-group">
                                    <label><b>Facebook</b></label>
                                    <input type="text" value="{{$data->facebook}}" class="form-control" id="facebook" name="facebook">
                                </div>

                                <div class="form-group">
                                    <label><b>Instagram</b></label>
                                    <input type="text" value="{{$data->instagram}}" class="form-control" id="instagram" name="instagram">
                                </div>

                                <div class="form-group">
                                    <label><b>Twitter</b></label>
                                    <input type="text" value="{{$data->twitter}}" class="form-control" id="twitter" name="twitter">
                                </div>

                                <div class="form-group">
                                    <label><b>Youtube</b></label>
                                    <input type="text" value="{{$data->youtube}}" class="form-control" id="youtube" name="youtube">
                                </div>


                            </div>
                            <div class="tab-pane fade" id="tabs-icons-text-5" role="tabpanel" aria-labelledby="tabs-icons-text-5-tab">


                                <div class="form-group">
                                    <label><b>About Us</b></label>
                                    <textarea id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label><b>Contact</b></label>
                                    <textarea id="contact" name="contact">{{$data->contact}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label><b>References</b></label>
                                    <textarea id="references" name="references">{{$data->references}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label><b>Status</b></label>
                                    <select class="form-control" id="status" name="status">
                                        <option>{{$data->status}}</option>
                                        <option>False</option>
                                        <option>True</option>
                                    </select>
                                </div>
                                <script>
                                    $(document).ready(function () {
                                        $('#aboutus').summernote();
                                        $('#contact').summernote();
                                        $('#references').summernote();
                                    });
                                </script>

                            </div>
                        </div>
                    </div>
                </div>


                        <button type="submit" class="btn btn-primary" style="margin-left: 2rem;">Edit Settings</button>
                    </form>

                </div>

                <div class="card-footer">
                    Footer
                </div>
            </div>
        </section>
@endsection
