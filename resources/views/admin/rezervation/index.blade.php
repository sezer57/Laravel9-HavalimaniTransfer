
@extends('layouts.adminbase')

@section('title','Comment & Review List')
{{--@section('sidebar')--}}
{{--    @parent--}}

{{--@endsection--}}
@section('content')



    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Rezervation List</h4>
            <div class="single-table">
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead class="text-uppercase bg-info">
                        <tr class="text-white">
                            <th scope="col">Id</th>
                            <th scope="col">user_id</th>
                            <th scope="col">transfer_id</th>
                            <th scope="col">from_location</th>
                            <th scope="col">to_location</th>
                            <th scope="col">price</th>
                            <th scope="col">pickuptime</th>
                            <th scope="col">status</th>
                            <th scope="col" style="width: 40px">Delete</th>
                            <th scope="col" style="width: 40px">Show</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs)
                            <tr>
                                <th scope="row">{{$rs->id}}</th>
                                <td>{{$rs->user_id}}</td>
                                <td>{{$rs->transfer_id}}</td>
                                <td>{{$rs->from_location_id}}</td>
                                <td>{{$rs->to_location_id}}</td>
                                <td>{{$rs->price}}</td>
                                <td>{{$rs->pickuptime}}</td>
                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('admin.rezervation.destroy',['id'=>$rs->id])}}" class="btn btn-danger mb-3">Delete</a></td>
                                <td><a href="{{route('admin.rezervation.show',['id'=>$rs->id])}}" class="btn btn-success mb-3" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">Show</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>




@endsection
