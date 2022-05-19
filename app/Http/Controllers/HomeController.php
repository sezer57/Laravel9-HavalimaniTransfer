<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Setting;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class HomeController extends Controller
{
    public static function maincategorylist()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }
    //
    public function index()
    {
        $sliderdata=Transfer::limit(3)->get();
        $transferlist=Transfer::limit(6)->get();
        return view('home.index',[
            'sliderdata'=>$sliderdata,
            'transferlist'=>$transferlist

        ]);
    }
    public function transfer($id)
    {
        $data=Transfer::find($id);
        $images = DB::table('images')->where('transfer_id',$id)->get();

        return view('home.transfer',[
            'data'=>$data,
            'images'=>$images
        ]);
    }
    public function about()
    {
        $data=Setting::first();

        return view('home.about',['data'=>$data]);

    }
    public function contact()
    {
        $data=Setting::first();

        return view('home.contact',['data'=>$data]);

    }
    public function references()
    {
        $data=Setting::first();

        return view('home.references',['data'=>$data]);

    }


    public function categorytransfers($id)
    {
        $data=Category::find($id);
        $transfers = DB::table('transfers')->where('category_id',$id)->get();

        return view('home.categorytransfers',[
            'data'=>$data,
            'transfers'=>$transfers
        ]);
    }
}
