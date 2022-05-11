@extends('layouts.frontbase')

@section('title','HavaAlanıTransfer')

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
                        <div class="portfolio-info">
                            <h3>Transfer information</h3>
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

            </div>
        </section><!-- End Portfolio Details Section -->




</main><!-- End #main -->

@endsection
