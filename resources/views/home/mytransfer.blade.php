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
                                <th scope="col">from_location</th>
                                <th scope="col">to_location</th>
                                <th scope="col">price</th>
                                <th scope="col">pickuptime</th>
                                <th scope="col">Date</th>
                                <th scope="col">Status</th>
                                <th scope="col" >Note</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                                <tr>
                                    <th scope="row">{{$rs->id}}</th>
                                    <td>{{$rs->fromlocation->name}}</td>
                                    <td>{{$rs->tolocation->name}}</td>
                                    <td>{{$rs->price}}</td>
                                    <td>{{$rs->pickuptime}}</td>
                                    <td>{{$rs->flighttime}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td>{{$rs->note}}</td>
                                    <td>  <form action="{{route('mytransfercancel',['id'=>$rs->id])}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                        <button type="submit" class="btn btn-danger mb-3" onclick="return confirm('Cancel are you sure?')">Cancel</button>
                                    </form>
                                    </td>
                                    </td>
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
