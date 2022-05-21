@extends('layouts.frontbase')

@section('title')
@section('description')
@section('keywords')
@section('icon')


@section('content')


        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">

                        <li><a href="">User Login</a></li>

                </div>

            </div>
        </section>

        <main id="main">
            <section id="faq" class="faq">
                <div class="container">
                    <div class="row faq-item d-flex align-items-stretch">

                        @include('auth.login')
                        </div>
                </div>
            </section>



    </main>
@endsection
