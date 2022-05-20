
@if($message=Session::get('info'))
    <div class="alert alert-info ">
        <strong>{{$message}}
        </strong>
    </div>
@endif

@if($message=Session::get('error'))
    <div class="alert alert-info ">
        <strong>{{$message}}
        </strong>
    </div>
@endif
