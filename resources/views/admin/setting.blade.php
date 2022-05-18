@extends('layouts.adminbase')

@section('title','HavaAlanıTransfer')


@section('content')


    <div class=".col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active show" id="pills-general-tab" data-toggle="pill" href="#pills-general" role="tab" aria-controls="pills-general" aria-selected="false">General</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-smtp-tab" data-toggle="pill" href="#pills-smtp" role="tab" aria-controls="pills-smtp" aria-selected="false">Smtp Email</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-social-tab" data-toggle="pill" href="#pills-social" role="tab" aria-controls="pills-social" aria-selected="true">Social Media</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-aboutus-tab" data-toggle="pill" href="#pills-aboutus" role="tab" aria-controls="pills-aboutus" aria-selected="false">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-references-tab" data-toggle="pill" href="#pills-references" role="tab" aria-controls="pills-references" aria-selected="false">References</a>
                    </li>
                </ul>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade  active show" id="pills-general" role="tabpanel" aria-labelledby="pills-general-tab">
                        <form action="{{route('admin.setting.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="form-group">
                            <label for="general">Title</label>
                            <input type="text" class="form-control" name="title"  value="{{$data->title}}">
                        </div>
                        <div class="form-group">
                            <label for="general">Keywords</label>
                            <input type="text" class="form-control" name="keywords"  value="{{$data->keywords}}">
                        </div>
                        <div class="form-group">
                            <label for="general">Description</label>
                            <input type="text" class="form-control" name="description"  value="{{$data->description}}">
                        </div>
                        <div class="form-group">
                            <label for="general">Company</label>
                            <input type="text" class="form-control" name="company" value="{{$data->company}}">
                        </div>
                        <div class="form-group">
                            <label for="general">Adress</label>
                            <input type="text" class="form-control" name="address" value="{{$data->address}}">
                        </div>
                        <div class="form-group">
                            <label for="general">Phone</label>
                            <input type="text" class="form-control" name="phone" value="{{$data->phone}}">
                        </div>
                        <div class="form-group">
                            <label for="general">Email</label>
                            <input type="text" class="form-control" name="email"  value="{{$data->email}}">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Select</label>
                            <select class="form-control" name="status">
                                <option>{{$data->status}}</option>
                                <option>True</option>
                                <option>False</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Icon</label>
                            <div class="input-group mb-3">

                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="icon">
                                    <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-smtp" role="tabpanel" aria-labelledby="pills-smtp-tab">
                        <div class="form-group">
                            <label for="general">Smpt Server</label>
                            <input type="text" class="form-control" name="sntpserver"  value="{{$data->sntpserver}}">
                        </div>
                        <div class="form-group">
                            <label for="general">Smpt Email</label>
                            <input type="text" class="form-control" name="sntpemail"  value="{{$data->sntpemail}}">
                        </div>
                        <div class="form-group">
                            <label for="general">Smpt Password</label>
                            <input type="text" class="form-control" name="sntppassword"  value="{{$data->sntppassword}}">
                        </div>
                        <div class="form-group">
                            <label for="general">Smpt Port</label>
                            <input type="number" class="form-control" name="sntpport"  value="{{$data->sntpport}}">
                        </div></div>
                    <div class="tab-pane fade" id="pills-social" role="tabpanel" aria-labelledby="pills-social-tab">
                        <div class="form-group">
                            <label for="general">Facebook</label>
                            <input type="text" class="form-control" name="facebook"  value="{{$data->facebook}}">
                        </div>
                        <div class="form-group">
                            <label for="general">Instagram</label>
                            <input type="text" class="form-control" name="instagram"  value="{{$data->instagram}}">
                        </div>
                        <div class="form-group">
                            <label for="general">Twitter</label>
                            <input type="text" class="form-control" name="twitter"  value="{{$data->twitter}}">
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-aboutus" role="tabpanel" aria-labelledby="pills-aboutus-tab">
                        <textarea class="aboutus" name="aboutus" >{{$data->aboutus}}</textarea>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <textarea class="contact" name="contact" >{{$data->contact}}</textarea>
                    </div>
                    <div class="tab-pane fade" id="pills-references" role="tabpanel" aria-labelledby="pills-references-tab">
                        <textarea class="references" name="references" >{{$data->references}}</textarea>
                    </div>
                </div>
                    <button type="submit" class="btn btn-primary mb-3">Update</button>
                </form>
            </div>
        </div>
    </div>


@endsection
@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.aboutus').summernote();
            $('.contact').summernote();
            $('.references').summernote();
        });
    </script>
@endsection
