@extends('layouts.frontbase')

@section('title','HavaAlanıTransfer')

@section('sidebar')
    @include("home.sidebar")
@endsection
@section('content') <main id="main">





    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="icon-box">
                        <i class="bi bi-briefcase"></i>
                        <h4><a href="#">Lorem Ipsum</a></h4>
                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="bi bi-card-checklist"></i>
                        <h4><a href="#">Dolor Sitema</a></h4>
                        <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <h4><a href="#">Transfers</a></h4>

            <div class="row portfolio-container">

                @foreach($transferlist as $rs)


                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap"> <a href="/transfer/{{$rs->id}}" >
                        <img src="{{Storage::url($rs->image)}}" class="img-fluid" alt="">
                        <div class="portfolio-info">

                            <h4>{{$rs->title}}</h4>

                            <div class="portfolio-links">
                                <a href="/transfer/{{$rs->id}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>

                            </div>
                        </div></a>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Portfolio Section -->

</main><!-- End #main -->

@endsection
