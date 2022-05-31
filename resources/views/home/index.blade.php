@extends('layouts.frontbase')

@section('title',''.$setting->title)
@section('description',''.$setting->description)
@section('keywords',''.$setting->keywords)
@section('icon',Storage::url($setting->icon))

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
                        <i class="bi bi-calendar2-date-fill"></i>
                        <h4>CHOOSE</h4>
                        <p>your destination and enter your flight information and pickuptime </p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="bi bi-zoom-in"></i>
                        <h4>COMPARE</h4>
                        <p>the prices available transport choose the one which is suitable for you and start</p>
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
                    <a href="/transfer/{{$rs->id}}" >
                    <div class="portfolio-wrap">
                        <img href="/transfer/{{$rs->id}}" src="{{Storage::url($rs->image)}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{$rs->title}}</h4>
                        </div>
                    </div>

                    </a>
                </div>
                @endforeach

            </div>

        </div>


    </section><!-- End Portfolio Section -->
    <section id="clients" class="clients section-bg">
        <div class="container">
<h5>Social Media Links:</h5>
            <div class="align-items-center">


                    <a href="https://facebook.com/{{$setting->facebook}}" class="fa fa-facebook"></a>



                    <a href="https://twitter.com/{{$setting->twitter}}" class="fa fa-twitter"></a>



                    <a href="https://youtube.com/{{$setting->youtube}}/" class="fa fa-youtube"></a>



                    <a href="https://instagram.com/{{$setting->instagram}}" class="fa fa-instagram"></a>


            </div>

        </div>
    </section>








</main><!-- End #main -->

@endsection

