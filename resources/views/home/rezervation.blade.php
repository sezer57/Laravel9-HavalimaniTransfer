@extends('layouts.frontbase')

@section('title','HavaAlanıTransfer')


@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>{{$transfer->title}}</h2>
                    <ol>
                        <li><a href="">Home</a></li>
                        <li>{{$transfer->title}}</li>
                    </ol>
                </div>

            </div>
        </section>

        <section id="pricing" class="pricing">
            <div class="container">

                <div class="row">



                    <div class="row skills-content">
                        <div class="box featured">
                            <h3>Your Rezervation Info</h3>
<form action="store" method="post">
    @csrf
    <input type="hidden" value="{{$from->id}}" name="from_location_id">
    <input type="hidden" value="{{$from->name}}" name="Airline">
    <input type="hidden" value="{{$to->id}}" name="to_location_id">
    <input type="hidden" value="{{$transfer->id}}" name="transfer_id">
    <input type="hidden" value="{{$price}}" name="price">
    <input type="hidden" value="{{$data->flightnumber}}" name="flightnumber">
    <input type="hidden" value="{{$data->date}}" name="flightdate">
    <input type="hidden" value="{{$data->hour}}" name="pickuptime">

                            <ul>
                               <li>FROM : {{$from->name}}</li>
                                <li>TO : {{$to->name}}</li>
                                <li>Date : {{$data->date}}</li>
                                <li>Flightnumber : {{$data->flightnumber}}</li>
                                <li>Pickuptime : {{$data->hour}}</li>
                            </ul>

                            <h4><sup>$</sup>{{$price}}</h4>
    <div class="btn-wrap">
        <button type="submit" class="btn-buy">Book</button>
    </div>
</form>
                        </div>
                    </div>

                </div>

            </div>
        </section>
    </main>

@endsection
