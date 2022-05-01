<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminTransferController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $data= Transfer::all();
        return view('admin.transfer.index',[
            'data'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $data= Category::all();
        return view('admin.transfer.create',[
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
        $data= new Transfer();
        $data->category_id= $request->category_id;
        $data->title=$request->title;
        $data->keywords=$request->keywords;
        $data->detail=$request->detail;
        $data->km_price=$request->km_price;
        $data->base_price=$request->base_price;
        $data->capasity=$request->capasity;
        $data->type_car=$request->type_car;
        $data->description=$request->description;
        $data->status=$request->status;
        if($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/transfer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function show(Transfer $transfer,$id )
    {
        {   $data= Transfer::find($id);
            return view('admin.transfer.show',[
                'data'=>$data
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function edit(Transfer $transfer,$id)
    {
        {   $data= Transfer::find($id);
            $datalist=  Category::all();
            return view('admin.transfer.edit',[
                'data'=>$data,
                'datalist'=>$datalist
            ]);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transfer $transfer,$id)
    {
        $data= Transfer::find($id);
        $data->category_id= $request->category_id;
        $data->title=$request->title;
        $data->keywords=$request->keywords;
        $data->detail=$request->detail;
        $data->km_price=$request->km_price;
        $data->base_price=$request->base_price;
        $data->capasity=$request->capasity;
        $data->type_car=$request->type_car;
        $data->description=$request->description;
        $data->status=$request->status;
        if($request->file('image')){
               $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/transfer');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transfer $transfer,$id)
    {
        $data= Transfer::find($id);
        if($data->image&& Storage::disk('public')->exists($data->image)){
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect('/admin/transfer');
    }
}
