@foreach($children as $subcategory)
    @if(count($subcategory->children))

        <li class="dropdown">{{$subcategory->title}}</li>
        @include('home.categorytree',['children'=>$subcategory->children])

    @else<ul>
        <li><a href="{{route('categorytransfers',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a> </li>
    </ul>
    @endif

@endforeach
