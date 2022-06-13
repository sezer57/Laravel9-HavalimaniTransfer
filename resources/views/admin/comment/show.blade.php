@extends('layouts.adminbase')

@section('title','Comment & Review :' .$data->title)
{{--@section('sidebar')--}}
{{--    @parent--}}

{{--@endsection--}}
@section('content')


    <div class="row">
        <div class="col-12 mt-5">
            <a style="width: 200px;color: white" class="btn btn-flat btn-danger btn-md mb-3" href="{{route('admin.comment.destroy',['id'=>$data->id])}}">Delete</a>

            <div class="card">

                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-striped text-center">
                                <thead class="text-uppercase">
                                <tr>
                                   <th>Detail Comment</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th style="width: 150px">Id</th>
                                    <td>{{$data->id}}</td>

                                </tr>
                                <tr>
                                    <th >Transfer</th>
                                    <td>
                                        {{$data->transfer->title}}</td>

                                </tr>
                                <tr>
                                    <th >Subject</th>
                                    <td>
                                        {{$data->subject}}</td>

                                </tr>

                                <tr>
                                    <th >Review</th>
                                    <td> {{$data->review}}
                                </tr>
                                <tr>
                                    <th >Rate</th>
                                    <td>{{$data->rate}}</td>

                                </tr>
                                <tr>
                                    <th >Status</th>
                                    <td>{{$data->status}}</td>

                                </tr>
                                <tr>
                                    <th >Ip number</th>
                                    <td>{{$data->ip}}</td>

                                </tr>
                                <tr>
                                    <th >Created Date</th>
                                    <td>{{$data->updated_at}}</td>

                                </tr>
                                <tr>
                                    <th >Update Date</th>
                                    <td>{{$data->created_at}}</td>

                                </tr>
                                <tr>
                                    <th >Status</th>
                                    <td>
                                        <form action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                            <select class="form-control" name="status">
                                                <option selected>{{$data->status}}</option>
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                        </br>

                                    </td>
                                <tr>
                                    <th>
                                    <button type="submit" class="btn btn-success mb-3">Update</button>
                                    </th>
                                    </form>

                                </tr>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                </div>
            </div>
        </div>
    </div>



@endsection
