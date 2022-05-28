<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Rezervation;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RezervationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)

    {
        $transfer= Transfer::find($request->transfer_id);
        $to=Location::find($request->from_location_id);
        $from=Location::find($request->to_location_id);
        $data=$request;
        $mesafe=($from->long-$to->long)*($from->long-$to->long)+($from->lat-$to->lat)*($from->lat-$to->lat);
        $total=bcsqrt($mesafe,2);
        $price=($transfer->km_price*$total)+$transfer->base_price;
        return view('home.rezervation',[
            'transfer'=>$transfer,
            'from'=>$from,
            'to'=>$to,
            'price'=>$price,
            'data'=>$data
        ]);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= new Rezervation();
        $data->user_id=Auth::id();
        $data->transfer_id=$request->transfer_id;
        $data->from_location_id=$request->from_location_id;
        $data->to_location_id=$request->to_location_id;
        $data->price=$request->price;
        $data->Airline=$request->Airline;
        $data->flightnumber=$request->flightnumber;
        $data->flightdate=$request->flightdate;
        $data->flighttime=$request->flightdate;
        $data->pickuptime=$request->pickuptime;
        $data->note='.';
        $data->ip=$request->ip();
        $data->save();

        return redirect()->route('transfer',['id'=>$request->input('transfer_id')])->with('info','Your transfer is waiting.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rezervation  $rezervation
     * @return \Illuminate\Http\Response
     */
    public function show(Rezervation $rezervation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rezervation  $rezervation
     * @return \Illuminate\Http\Response
     */
    public function edit(Rezervation $rezervation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rezervation  $rezervation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rezervation $rezervation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rezervation  $rezervation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rezervation $rezervation)
    {
        //
    }
}
