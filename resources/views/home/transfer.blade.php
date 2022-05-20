@extends('layouts.frontbase')

@section('title','HavaAlanıTransfer')
@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('content')
    <section ></section>
    <main id="main">

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events">

                            <div class="swiper-wrapper align-items-center" id="swiper-wrapper-ddc474e10bbf43183" aria-live="off" style="transform: translate3d(-802px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 401px;">
                                    <img src="" alt="">
                                </div>
                                @foreach($images as $rs)
                                    <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 401px;">
                                        <img src="{{Storage::url($rs->image)}}" alt="">
                                    </div>
                                @endforeach


                            </div>
                            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    </div>

                    <div class="col-lg-4">
                        @php
                            $average = $data->comment->average('rate');
                        @endphp
                        <div class="portfolio-info">
                            <h3>Transfer information
                            </h3>
                            <p><i class="bi bi-chat-dots">
                                {{$data->comment->count('id')}}/{{number_format($average,1)}}
                                <span class="fa fa-star @if ($average>=1) checked @endif "></span>
                                <span class="fa fa-star @if ($average>=2) checked @endif "></span>
                                <span class="fa fa-star @if ($average>=3) checked @endif "></span>
                                <span class="fa fa-star @if ($average>=4) checked @endif "></span>
                                <span class="fa fa-star @if ($average>=5) checked @endif "></span>
                                </i>
                            </p>

                            <h5>

                            </h5>
                            <ul>
                                <li><strong>Category</strong>:{{$data->title}} </li>
                                <li><strong>Capasity</strong>: {{$data->capasity}}</li>
                                <li><strong>Km Price</strong>: {{$data->km_price}}</li>
                                <li><strong>Base Price</strong>:{{$data->base_price}}</li>
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h2>Detail</h2>
                            <p>{{$data->description}}</p>
                        </div>
                    </div>

                </div>

                <div class="blog">

                    <div class="blog-comments">
                        <h4 class="comments-count">{{$data->comment->count('id')}} Comments</h4>
                        @foreach($reviews as $rs)
                        <div id="comment-{{$loop->iteration}}" class="comment">
                            <div class="d-flex">
                                <div class="comment-img"><img src="assets/img/blog/comments-1.jpg" alt=""></div>
                                <div>
                                    <h5><a href=""></a><i class="bi bi-person"></i> {{$rs->user->name}}
                                            <span class="fa fa-star @if ($rs->rate>=1) checked @endif "></span>
                                            <span class="fa fa-star @if ($rs->rate>=2) checked @endif "></span>
                                            <span class="fa fa-star @if ($rs->rate>=3) checked @endif "></span>
                                            <span class="fa fa-star @if ($rs->rate>=4) checked @endif "></span>
                                            <span class="fa fa-star @if ($rs->rate>=5) checked @endif "></span>
                                    </h5>
                                    <time datetime="{{$rs->created_at}}">{{$rs->created_at}}</time>
                                    <p>{{$rs->subject}}
                                    </p>
                                </div>

                            </div>
                        </div><!-- End comment #2-->
                        @endforeach


                        <div class="reply-form">
                            @include('home.messages')

                            <h4>Leave a Reply</h4>

                            <p>Your email address will not be published. Required fields are marked * </p>
                            <form action="{{route('storecomment')}}" method="post">
                                @csrf

                                <input name="transfer_id" type="hidden"  value="{{$data->id}}">
                                <div class="row">

                                    <div class="col-md-6 form-group">
                                        <input name="subject" type="text" class="form-control" placeholder="Subject*">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <textarea name="review" class="form-control" placeholder="Your Comment*"></textarea>
                                    </div>
                                </div>
                                <div class="row"><strong>Rate:</strong>

                                    <div class="col form-group">
                                        <div class="rating"> <input type="radio" name="rate" value="5" id="5"><label for="5">☆</label> <input type="radio" name="rate" value="4" id="4"><label for="4">☆</label> <input type="radio" name="rate" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rate" value="2" id="2"><label for="2">☆</label> <input type="radio" name="rate" value="1" id="1"><label for="1">☆</label> </div>
                                    </div>
                                </div>
                                @auth()
                                    <button type="submit" class="btn btn-primary">Post Comment</button>
                                @else
                                    <a href="/login" class="btn btn-primary">For submit please login</a>
                                @endauth
                            </form>

                        </div>

                    </div>
                </div>

            </div>

        </section><!-- End Portfolio Details Section -->




    </main><!-- End #main -->

@endsection
@section('foot')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
