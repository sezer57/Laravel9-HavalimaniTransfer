@extends('layouts.adminbase')

@section('title','Transfer Add')
{{--@section('sidebar')--}}
{{--    @parent--}}

{{--@endsection--}}
@section('content')

    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Create Transfer</h4>
                    <form action="{{route('admin.transfer.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Parent Transfer</label>
                            <select class="form-control select2" name="category_id" style="">
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
                            <label for="exampleInputEmail1">Detail</label>
                            <textarea class="edit" name="detail" ></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Type of Car</label>
                            <input type="text" class="form-control" name="type_car" aria-describedby="emailHelp" placeholder="Enter description">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Km Price</label>
                            <input type="number"  value="0" class="form-control" name="km_price" aria-describedby="emailHelp" placeholder="Enter description">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Base Price</label>
                            <input type="number"  value="0" class="form-control" name="base_price" aria-describedby="emailHelp" placeholder="Enter description">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Capasity</label>
                            <input type="number" value="0" class="form-control" name="capasity" aria-describedby="emailHelp" placeholder="Enter description">
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
@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.edit').summernote();
        });
    </script>
@endsection
