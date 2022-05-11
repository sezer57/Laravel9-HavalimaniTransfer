
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="2500" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
@foreach($sliderdata as $rs)
            <!-- Slide 1 -->
            <div class="carousel-item" style="background-image:url({{Storage::url($rs->image)}})">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">{{$rs->title}}</h2>
                        <p class="animate__animated animate__fadeInUp">{{$rs->description}}</p>
                    </div>
                </div>
            </div>
@endforeach
            <!-- Slide 2 -->
            <div class="carousel-item active" style="background-image: url({{Storage::url($rs->image)}})">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">{{$rs->title}}</h2>
                        <p class="animate__animated animate__fadeInUp">{{$rs->description}}</p>
                    </div>
                </div>
            </div>



        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section><!-- End Hero -->
