@extends('layouts.frontbase')

@section('title','User Profile')



@section('content')


        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">

                    <ol>
                        <li><a href="">Home</a></li>

                    </ol>
                </div>

            </div>
        </section>

        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">

                        @include('profile.show')

                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">



                            <h3 class="sidebar-title">User Profile</h3>
                            <div class="sidebar-item categories">
                                <ul>
                                    <li><a href="/myaccount">MYACCOUNT</a></li>
                                    <li><a href="/mytransfer">MY TRANSFER </a></li>
                                    <li><a href="/mycomment">MY COMMENTS </a></li>
                                    <li><a href="/mymessages">MY MESSAGES </a></li>

                                </ul>
                            </div><!-- End sidebar categories-->





                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                </div>

            </div>
        </section>



    </main>
@endsection
