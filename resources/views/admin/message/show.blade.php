@extends('layouts.adminbase')

@section('title','Message edit :' .$data->title)
{{--@section('sidebar')--}}
{{--    @parent--}}

{{--@endsection--}}
@section('content')


    <div class="row">
        <div class="col-12 mt-5">
            <a style="width: 200px;color: white" class="btn btn-flat btn-danger btn-md mb-3" href="{{route('admin.message.destroy',['id'=>$data->id])}}">Delete</a>

            <div class="card">

                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-striped text-center">
                                <thead class="text-uppercase">
                                <tr>
                                   <th>Detail Message</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th style="width: 150px">Id</th>
                                    <td>{{$data->id}}</td>

                                </tr>
                                <tr>
                                    <th >Name</th>
                                    <td>
                                        {{$data->name}}</td>

                                </tr>

                                <tr>
                                    <th >Email</th>
                                    <td> {{$data->email}}
                                </tr>
                                <tr>
                                    <th >Phone</th>
                                    <td>{{$data->phone}}</td>

                                </tr>
                                <tr>
                                    <th >Subject</th>
                                    <td>{{$data->subject}}</td>

                                </tr>
                                <tr>
                                    <th >Message</th>
                                    <td>{{$data->message}}</td>

                                </tr>
                                <tr>
                                    <th >Ip number</th>
                                    <td>{{$data->ip}}</td>

                                </tr>
                                <tr>
                                    <th >Status</th>
                                    <td>{{$data->status}}</td>

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
                                    <th >Admin Note</th>
                                    <td>
                                        <form action="{{route('admin.message.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                            <div class="form-group mt-3">
                                                <textarea class="form-control" name="note" rows="5"  required="">{{$data->note}}</textarea>
                                            </div>
                                        <br>
                                        <button type="submit" class="getstarted">Update Note</button>
                                        </form>
                                    </td>

                                </tr>
                                </tbody>
                            </table>
                        </div>

                </div>
            </div>
        </div>
    </div>



@endsection
