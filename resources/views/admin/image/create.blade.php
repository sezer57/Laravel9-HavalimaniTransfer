@extends('layouts.adminbase')

@section('title','Category Add')
{{--@section('sidebar')--}}
{{--    @parent--}}

{{--@endsection--}}
@section('content')

    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Create Category</h4>
                    <form action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Parent Category</label>
                            <select class="form-control select2" name="parent_id" style="">
                                <option value="0" selected="selected">Main Category</option>
                                @foreach($data as $rs)
                                  <option value="{{$rs->id}}">
                                      {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}
                                  </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Keywords</label>
                            <input type="text" class="form-control" name="keywords" aria-describedby="emailHelp" placeholder="Enter keywords">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <input type="text" class="form-control" name="description" aria-describedby="emailHelp" placeholder="Enter description">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <div class="input-group mb-3">

                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image">
                                <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Select</label>
                            <select class="form-control" name="status">
                                <option>Select</option>
                                <option>True</option>
                                <option>False</option>
                            </select>
                        </div>



                        <button type="submit" class="btn btn-primary mb-3">SAVE</button>
                    </form>
                </div>
            </div>
        </div>

    </div>



@endsection
