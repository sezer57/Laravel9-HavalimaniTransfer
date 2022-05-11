@extends('layouts.adminbase')

@section('title','Transfer List')
{{--@section('sidebar')--}}
{{--    @parent--}}

{{--@endsection--}}
@section('content')



        <div class="card">
            <a style="width: 200px;color: white" class="btn btn-flat btn-success btn-md mb-3" href="{{route('admin.transfer.create')}}">Add Transfer</a>
            <div class="card-body">
                <h4 class="header-title">Transfer List</h4>
                <div class="single-table">
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead class="text-uppercase bg-info">
                            <tr class="text-white">
                                <th scope="col">ID</th>
                                <th scope="col">Category</th>
                                <th scope="col">Title</th>
                                <th scope="col">Base Price</th>
                                <th scope="col">Km Price</th>
                                <th scope="col">Capasity</th>
                                <th scope="col">Type</th>
                                <th scope="col">Image</th>
                                <th scope="col">Status</th>
                                <th scope="col">Image Gallery</th>
                                <th scope="col" style="width: 40px">Edit</th>
                                <th scope="col" style="width: 40px">Delete</th>
                                <th scope="col" style="width: 40px">Show</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                            <tr>
                                <th scope="row">{{$rs->id}}</th>
                                <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                                <td>{{$rs->title}}</td>
                                <td>{{$rs->base_price}}</td>
                                <td>{{$rs->km_price}}</td>
                                <td>{{$rs->capasity}}</td>
                                <td>{{$rs->type_car}}</td>
                                <td>
                                    @if ($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" height="75px" width="75px">
                                        @endif
                                    </td>
                                <td>
                                    <a href="{{route('admin.image.index',['pid'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')" >
                                    <img src="{{asset('assets')}}/img/gallery.png" style="height:40px">
                                    </a>
                                </td>
                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('admin.transfer.edit',['id'=>$rs->id])}}" class="btn btn-warning mb-3">Edit</a></td>
                                <td><a href="{{route('admin.transfer.destroy',['id'=>$rs->id])}}" class="btn btn-danger mb-3">Delete</a></td>
                                <td><a href="{{route('admin.transfer.show',['id'=>$rs->id])}}" class="btn btn-success mb-3">Show</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>




@endsection
