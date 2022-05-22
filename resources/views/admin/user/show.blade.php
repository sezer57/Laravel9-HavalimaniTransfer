@extends('layouts.adminbase')

@section('title','User Role  :' .$data->title)
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
                                    <th >Role</th>
                                    <td>
                                        @foreach($data->roles as $role)
                                            {{$role->name}}  <a href="{{route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id])}}" class="btn btn-danger mb-3" onclick="return confirm('Deleting are you sure?')">[X]</a>

                                        @endforeach
                                             </td>

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
                                    <th >Role Change</th>
                                    <td>
                                        <form action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                            <div class="form-group mt-3">
                                                <select name="role_id">
                                                    @foreach($roles as $role)
                                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                                    @endforeach
                                                   </select>
                                            </div>
                                        <br>
                                        <button type="submit" class="getstarted">Update Role</button>
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
