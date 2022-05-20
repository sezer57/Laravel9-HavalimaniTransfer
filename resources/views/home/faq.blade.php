@extends('layouts.frontbase')

@section('title',''.$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))

@section('content')


        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>{{$setting->title}}</h2>
                    <ol>
                        <li><a href="">Home</a></li>
                        <li>{{$setting->title}}</li>
                    </ol>
                </div>

            </div>
        </section>
        <main id="main">

            <section id="faq" class="faq">
                <div class="container">
                    <div class="section-title">
                        <h2>F.A.Q</h2><p>Frequently Asked Questions</p>
                    </div>
                    <div id="accordion">

                    @foreach($datalist as $rs)
                        <div class="card">
                            <a class="card-link" data-toggle="collapse" href="#collapse{{$loop->iteration}}">
                            <div class="card-header">
                                    {{$rs->question}}
                            </div> </a>
                            <div id="collapse{{$loop->iteration}}" class="collapse @once show @endonce" data-parent="#accordion">
                                <div class="card-body">
                                {!! $rs->answer !!}

                            </div>
                    </div>
                        </div>
                    @endforeach
                </div>



    </main>
@endsection
@section('foot')
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
