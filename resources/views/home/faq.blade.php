@extends('layouts.frontbase')

@section('title',''.$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))


@section('content')

    <main id="main">
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


{!! $setting->aboutus !!}


    </main>
@endsection
