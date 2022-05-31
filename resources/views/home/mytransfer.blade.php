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

                <table class="table text-center">
                            <thead class="text-uppercase bg-info">
                            <tr class="text-white">
                                <th scope="col">Id</th>
                                <th scope="col">User_id</th>
                                <th scope="col">Transfer_id</th>
                                <th scope="col">from_location</th>
                                <th scope="col">to_location</th>
                                <th scope="col">price</th>
                                <th scope="col">pickuptime</th>
                                <th scope="col">Status</th>
                                <th scope="col" >Note</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                                <tr>
                                    <th scope="row">{{$rs->id}}</th>
                                    <td>{{$rs->user_id}}</td>
                                    <td>{{$rs->transfer_id}}</td>
                                    <td>{{$rs->from_location_id}}</td>
                                    <td>{{$rs->to_location_id}}</td>
                                    <td>{{$rs->price}}</td>
                                    <td>{{$rs->pickuptime}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td>{{$rs->note}}</td>
                                      </tr>
                            @endforeach
                            </tbody>
                        </table>
                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">



                        <h3 class="sidebar-title">User Profile</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                <li><a href="/myaccount">MY ACCOUNT</a></li>
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
@endsection
