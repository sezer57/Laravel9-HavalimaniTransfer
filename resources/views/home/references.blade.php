@extends('layouts.frontbase')

@section('title','HavaAlanıTransfer')


@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>{{$data->title}}</h2>
                    <ol>
                        <li><a href="">Home</a></li>
                        <li>{{$data->title}}</li>
                    </ol>
                </div>

            </div>
        </section>

        <main id="main">
            <section id="faq" class="faq">
                <div class="container">
                    <div class="row faq-item d-flex align-items-stretch">

{!! $data->references !!}
</div>
        </div>
        </section>



    </main>
@endsection
