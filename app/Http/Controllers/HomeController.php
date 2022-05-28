<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Location;
use App\Models\Message;
use App\Models\Rezervation;
use App\Models\Setting;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\HydrationMiddleware\RenderView;

class HomeController extends Controller
{
    public static function maincategorylist()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }
    //
    public function index()
    {    $setting=Setting::first();
        $sliderdata=Transfer::limit(3)->get();
        $transferlist=Transfer::limit(6)->get();
        return view('home.index',[
            'setting'=>$setting,
            'sliderdata'=>$sliderdata,
            'transferlist'=>$transferlist

        ]);
    }
    public function transfer($id)
    {
        $data=Transfer::find($id);
        $locationairport=Location::where('type','airport')->get();
        $location=Location::where('type','city')->get();
        $images = DB::table('images')->where('transfer_id',$id)->get();
        $reviews=Comment::where('transfer_id',$id)->where('status','True')->get();
        return view('home.transfer',[
            'data'=>$data,
            'images'=>$images,
            'reviews'=>$reviews,
            'location'=>$location,
            'locationairport'=>$locationairport
        ]);
    }
    public function about()
    {
        $setting=Setting::first();

        return view('home.about',['setting'=>$setting]);

    }
    public function contact()
    {
        $setting=Setting::first();

        return view('home.contact',['setting'=>$setting]);

    }
    public function faq()
    {   $setting=Setting::first();
        $datalist=faq::all();

        return view('home.faq',[
            'setting'=>$setting,
            'datalist'=>$datalist,
            ]);

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
    public function storemessage(Request $request)
    {
        $data=new Message();
        $data->name=$request->input('name');
        $data->email=$request->input('email') ;
        $data->phone=$request->input('phone');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->ip=$request->ip();
        $data->save();


        return redirect()->route('contact')->with('info','Your message has been sent.');

    }
    public function storecomment(Request $request)
    {
        $data=new Comment();
        $data->user_id=Auth::id();
        $data->transfer_id=$request->input('transfer_id') ;
        $data->subject=$request->input('subject');
        $data->review=$request->input('review');
        $data->rate=$request->input('rate');
        $data->ip=$request->ip();
        $data->save();


        return redirect()->route('transfer',['id'=>$request->input('transfer_id')])->with('info','Your comment has been sent.');

    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function mytransfer()
    {

        $data=DB::table('rezervations')->where('user_id', Auth::user()->id)->get();
        return view('home.mytransfer',[
            'data'=>$data
        ]);
    }
    public function mycomment()
    {

        $data=DB::table('comments')->where('user_id', Auth::user()->id)->get();
        return view('home.mycomment',[
            'data'=>$data
        ]);
    }
    public function mymessages()
    {

        $data=DB::table('messages')->where('email', Auth::user()->email)->get();
        return view('home.mymessages',[
            'data'=>$data
        ]);
    }


    public function loginadmincheck(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('admin/');
        }

        return back()->withErrors([
            'error' => 'Wrong password or username.',
        ])->onlyInput('email');
    }
}
