@extends('layouts.adminbase')

@section('title','FAQ edit :' .$data->title)
{{--@section('sidebar')--}}
{{--    @parent--}}

{{--@endsection--}}
@section('content')
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Edit FAQ {{$data->title}}</h4>
                    <form action="{{route('admin.faq.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Question</label>
                            <input type="text" class="form-control" name="question" aria-describedby="emailHelp" value="{{$data->question}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Answer</label>
                            <textarea class="answer" name="answer" >{{$data->answer}}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Select</label>
                            <select class="form-control" name="status">
                                <option selected>{{$data->status}}</option>
                                <option>True</option>
                                <option>False</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary mb-3">Update Data</button>
                    </form>
                </div>
            </div>
        </div>

    </div>



@endsection
@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.answer').summernote();
        });
    </script>
@endsection
