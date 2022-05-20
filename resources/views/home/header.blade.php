

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="/">Sailor</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="{{asset('assets')}}/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            @php
            $mainCategories=\App\Http\Controllers\HomeController::maincategorylist()
            @endphp
            <ul>
                <li><a href="{{route('home')}}" class="active">Home</a></li>

                <li class="dropdown"><a href="#"><span>Category</span>
                        <i class="bi bi-chevron-down"></i></a>
                    <ul>

                        @foreach($mainCategories as $rs)
                            <li class="dropdown"><a href="{{route('categorytransfers',['id'=>$rs->id,'slug'=>$rs->title])}}">{{$rs->title}}</a>

                            @if(count($rs->children))
                                @include('home.categorytree',['children'=>$rs->children])
                            @endif
                            </li>
{{--                        <a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>--}}
{{--                            <ul>--}}
{{--                                <li><a href="#">Deep Drop Down 1</a></li>--}}
{{--                                <li><a href="#">Deep Drop Down 2</a></li>--}}
{{--                                <li><a href="#">Deep Drop Down 3</a></li>--}}
{{--                                <li><a href="#">Deep Drop Down 4</a></li>--}}
{{--                                <li><a href="#">Deep Drop Down 5</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                            </li>
                        @endforeach
                    </ul>


                <li><a href="{{route('faq')}}">FAQ</a></li>
                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
                <li><a href="{{route('references')}}">References</a></li>


                <li><a href="index.html" class="getstarted">LOGIN</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
