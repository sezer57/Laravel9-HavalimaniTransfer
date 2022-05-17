

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
                <li><a href="/" class="active">Home</a></li>

                <li class="dropdown"><a href="#"><span>Category</span>
                        <i class="bi bi-chevron-down"></i></a>
                    <ul>@foreach($mainCategories as $rs)
                        <li><a href="transfer/{{$rs->id}}">{{$rs->title}}</a></li>


{{--                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>--}}
{{--                            <ul>--}}
{{--                                <li><a href="#">Deep Drop Down 1</a></li>--}}
{{--                                <li><a href="#">Deep Drop Down 2</a></li>--}}
{{--                                <li><a href="#">Deep Drop Down 3</a></li>--}}
{{--                                <li><a href="#">Deep Drop Down 4</a></li>--}}
{{--                                <li><a href="#">Deep Drop Down 5</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                        @endforeach </ul>
                </li>
                <li><a href="services.html">Services</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="pricing.html">Pricing</a></li>
                <li><a href="blog.html">Blog</a></li>

                <li><a href="contact.html">Contact</a></li>
                <li><a href="index.html" class="getstarted">Get Started</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
