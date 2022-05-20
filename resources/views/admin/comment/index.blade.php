@extends('layouts.adminbase')

@section('title','Message List')
{{--@section('sidebar')--}}
{{--    @parent--}}

{{--@endsection--}}
@section('content')



        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Message List</h4>
                <div class="single-table">
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead class="text-uppercase bg-info">
                            <tr class="text-white">
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Email</th>
                                <th scope="col">Status</th>
                                <th scope="col" style="width: 40px">Delete</th>
                                <th scope="col" style="width: 40px">Show</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                            <tr>
                                <th scope="row">{{$rs->id}}</th>
                                <td>{{$rs->name}}</td>
                                <td>{{$rs->phone}}</td>
                                <td>{{$rs->subject}}</td>
                                <td>{{$rs->email}}</td>
                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('admin.message.destroy',['id'=>$rs->id])}}" class="btn btn-danger mb-3">Delete</a></td>
                                <td><a href="{{route('admin.message.show',['id'=>$rs->id])}}" class="btn btn-success mb-3" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">Show</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>




@endsection
