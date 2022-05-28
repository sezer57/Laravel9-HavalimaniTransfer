@extends('layouts.adminbase')

@section('title','Comment & Review :' .$data->title)
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
                                   <th>Rezervation List</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th style="width: 150px">Id</th>
                                    <td>{{$data->id}}</td>

                                </tr>
                                <tr>
                                    <th >user_id</th>
                                    <td>
                                        {{$data->user_id}}</td>

                                </tr>
                                <tr>
                                    <th >transfer_id</th>
                                    <td>
                                        {{$data->transfer_id}}</td>

                                </tr>

                                <tr>
                                    <th >from_location_id</th>
                                    <td> {{$data->from_location_id}}
                                </tr>
                                <tr>
                                    <th >to_location_id</th>
                                    <td>{{$data->to_location_id}}</td>

                                </tr>
                                <tr>
                                    <th >price</th>
                                    <td>{{$data->price}}</td>

                                </tr>
                                <tr>
                                    <th >pickuptime</th>
                                    <td>{{$data->pickuptime}}</td>

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
                                    <th >Note</th>
                                    <td>
                                        <form action="{{route('admin.rezervation.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                            <div class="form-group mt-3">
                                                <textarea class="form-control" name="note" rows="5"  required="">{{$data->note}}</textarea>
                                            </div>
                                            <br>
                                        </td>
                                </tr>
                                <tr>
                                    <th >Status</th>
                                    <td>
                                            <select class="form-control" name="status">
                                                <option selected>{{$data->status}}</option>
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                        </br>

                                    </td>
                                </tr>
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
