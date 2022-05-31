@extends('layouts.frontbase')

@section('title',$data->title . 'Transfer')


@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>{{$data->title}} Transfers</h2>
                    <ol>
                        <li><a href="">Home</a></li>
                        <li>{{$data->title}}</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">
@foreach($transfers as $rs)
                    <article class="entry">

                        <div class="entry-img">
                            <img src="{{Storage::url($rs->image)}}" alt="" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            <a href="{{route('transfer',['id'=>$rs->id])}}">{{$rs->title}}</a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="">Admin</a></li>

                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                              {{$rs->description}}
                               </p>
                            <div class="read-more">
                                <a href="{{route('transfer',['id'=>$rs->id])}}">Choose</a>
                            </div>
                        </div>

                    </article><!-- End blog entry -->
                @endforeach
                   <!-- End blog entry -->


                </div><!-- End blog entries list -->

            </div>

        </div>
    </section>
    </main>
@endsection
