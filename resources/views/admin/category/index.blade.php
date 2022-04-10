@extends('layouts.adminbase')

@section('title','Category List')
{{--@section('sidebar')--}}
{{--    @parent--}}

{{--@endsection--}}
@section('content')



        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Thead info</h4>
                <div class="single-table">
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead class="text-uppercase bg-info">
                            <tr class="text-white">
                                <th scope="col">ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">Keywords</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Status</th>
                                <th scope="col" style="width: 40px">Edit</th>
                                <th scope="col" style="width: 40px">Delete</th>
                                <th scope="col" style="width: 40px">Show</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                            <tr>
                                <th scope="row">{{$rs->id}}</th>
                                <td>{{$rs->title}}</td>
                                <td>{{$rs->keywords}}</td>
                                <td>{{$rs->description}}</td>
                                <td>{{$rs->image}}</td>
                                <td>{{$rs->status}}</td>
                                <td><a href="/admin/category/edit/{{$rs->id}}"class="btn btn-warning mb-3">Edit</a></td>
                                <td><a href="/admin/category/delete/{{$rs->id}}" class="btn btn-danger mb-3">Delete</a></td>
                                <td><a href="/admin/category/show/{{$rs->id}}" class="btn btn-success mb-3">Show</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>




@endsection
