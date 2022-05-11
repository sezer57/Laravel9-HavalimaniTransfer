@extends('layouts.adminwindow')

@section('title','Transfer Gallery List')
{{--@section('sidebar')--}}
{{--    @parent--}}

{{--@endsection--}}
@section('content')
    <h2>{{$transfer->title}}</h2>
    <form action="{{route('admin.image.store',['pid'=>$transfer->id])}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="Enter title">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Image</label>
            <div class="input-group mb-3">

                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image">
                    <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                </div>
                <button type="submit" class="btn btn-primary mb-3">Upload</button>
            </div>
        </div>

    </form>
    <div class="card">
            <div class="card-body">
                <h4 class="header-title">Transfer Image List</h4>
                <div class="single-table">
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead class="text-uppercase bg-info">
                            <tr class="text-white">
                                <th scope="col">ID</th>

                                <th scope="col">Title</th>
                                <th scope="col">Image</th>

                                <th scope="col" style="width: 40px">Delete</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($images as $rs)
                            <tr>
                                <th scope="row">{{$rs->id}}</th>
                                <td>{{$rs->title}}</td>

                                <td>
                                    @if ($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" style="height:80px">
                                        @endif
                                    </td>
                                <td><a href="{{route('admin.image.destroy',['pid'=>$transfer,'id'=>$rs->id])}}" class="btn btn-danger mb-3">Delete</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

@endsection
