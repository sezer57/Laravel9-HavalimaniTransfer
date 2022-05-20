@extends('layouts.adminbase')

@section('title','Category edit :' .$data->title)
{{--@section('sidebar')--}}
{{--    @parent--}}

{{--@endsection--}}
@section('content')


    <div class="row">
        <div class="col-12 mt-5">
            <a style="width: 200px;color: white" class="btn btn-flat btn-info btn-md mb-3" href="{{route('admin.transfer.edit',['id'=>$data->id])}}">Edit</a>
            <a style="width: 200px;color: white" class="btn btn-flat btn-danger btn-md mb-3" href="{{route('admin.transfer.destroy',['id'=>$data->id])}}">Delete</a>

            <div class="card">

                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-striped text-center">
                                <thead class="text-uppercase">
                                <tr>
                                   <th>Detail Data</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th style="width: 150px">Id</th>
                                    <td>{{$data->id}}</td>

                                </tr>
                                <tr>
                                    <th >Title</th>
                                    <td>
                                        {{$data->title}}</td>

                                </tr>

                                <tr>
                                    <th >Parent Category</th>
                                    <td> {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category,$data->category->title)}}</td>

                                </tr>
                                <tr>
                                    <th >Keywords</th>
                                    <td>{{$data->keywords}}</td>

                                </tr>
                                <tr>
                                    <th >Description</th>
                                    <td>{{$data->description}}</td>

                                </tr>
                                <tr>
                                    <th >Base Price</th>
                                    <td>{{$data->base_price}}</td>

                                </tr>
                                <tr>
                                    <th >Km Price</th>
                                    <td>{{$data->km_price}}</td>

                                </tr>
                                <tr>
                                    <th >Capasity</th>
                                    <td>{{$data->capasity}}</td>

                                </tr>
                                <tr>
                                    <th >Type of Car</th>
                                    <td>{{$data->type_car}}</td>

                                </tr>
                                <tr>
                                    <th >Image</th>
                                    <td> @if ($data->image)
                                            <img src="{{Storage::url($data->image)}}" style="height:40px">
                                        @endif</td>

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
                                </tbody>
                            </table>
                        </div>

                </div>
            </div>
        </div>
    </div>



@endsection
