@extends('layouts.adminbase')

@section('title','User List')
{{--@section('sidebar')--}}
{{--    @parent--}}

{{--@endsection--}}
@section('content')



    <div class="card">
        <div class="card-body">
            <h4 class="header-title">User List</h4>
            <div class="single-table">
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead class="text-uppercase bg-info">
                        <tr class="text-white">
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col" style="width: 40px">Delete</th>
                            <th scope="col" style="width: 40px">Show</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs )
                            <tr>
                                <th scope="row">{{$rs->id}}</th>
                                <td>{{$rs->name}}</td>
                                <td>{{$rs->email}}</td>
                                <td>@foreach($rs->roles as $role)
                                        {{$role->name}}
                                    @endforeach
                                </td>
                                <td><a href="{{route('admin.user.destroy',['id'=>$rs->id])}}" class="btn btn-danger mb-3">Delete</a></td>
                                <td><a href="{{route('admin.user.show',['id'=>$rs->id])}}" class="btn btn-success mb-3" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">Show</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>




@endsection
