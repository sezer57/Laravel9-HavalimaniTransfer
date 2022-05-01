@extends('layouts.adminbase')

@section('title','Category List')
{{--@section('sidebar')--}}
{{--    @parent--}}

{{--@endsection--}}
@section('content')



        <div class="card">
            <a style="width: 200px;color: white" class="btn btn-flat btn-success btn-md mb-3" href="{{route('admin.category.create')}}">Add Category</a>
            <div class="card-body">
                <h4 class="header-title">Category List</h4>
                <div class="single-table">
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead class="text-uppercase bg-info">
                            <tr class="text-white">
                                <th scope="col">ID</th>
                                <th scope="col">Parent</th>
                                <th scope="col">Title</th>
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
                                <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</td>
                                <td>{{$rs->title}}</td>

                                <td>
                                    @if ($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" style="height:40px">
                                        @endif
                                    </td>
                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('admin.category.edit',['id'=>$rs->id])}}" class="btn btn-warning mb-3">Edit</a></td>
                                <td><a href="{{route('admin.category.destroy',['id'=>$rs->id])}}" class="btn btn-danger mb-3">Delete</a></td>
                                <td><a href="{{route('admin.category.show',['id'=>$rs->id])}}" class="btn btn-success mb-3">Show</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>




@endsection
