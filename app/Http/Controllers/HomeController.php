<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // public function index(){
    //$setting= Setting::first();
    //return view('home.index');
    //}
    public function logincheck(Request $request)
    {
        if($request->isMethod('post'))
        {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)){
                $request->session()->regenerate();
                return redirect()->intended('admin');
            }
            return back()->withErrors(['email'=>'The provided credentials do not match our records',]);
        }
        else{
            return view('login');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
    public function admin_logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    public static function categorylist()
    {
        return Category::where('parent_id', '=' ,0)->with('children')->get();
    }

    public  static function getSetting()
    {
        return Setting::first();
    }

    public function login(){
        return view('admin.login');
    }
    public function home(){
        $setting=Setting::first();
        $slider = Product::select('title','image','price')->limit(4)->get();

        $data=
            [
                'setting'=>$setting,
                'slider'=>$slider,
                'page'=>'home'
            ];
        return view('layouts.home',$data);
    }
    public function sendmessage(Request $request)
    {
        $data= new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();
        return redirect()->route('contact')->with('success','Gönderme Başarılı!');
    }
    public function about(){
        $setting=Setting::first();
        return view('layouts.about',['setting'=>$setting]);
    }
    public function references(){
        $setting=Setting::first();
        return view('layouts.references',['setting'=>$setting]);
    }
    public function appointment(){
        $datalist= Product::all();
        #$datalist = Category::with('children')->get();
        $setting=Setting::first();
        return view('layouts.appointment',['setting'=>$setting,'datalist'=>$datalist]);
    }
    public function appxx(){
        return view('layouts.appxx');
    }
    public function faq(){
        $setting=Setting::first();
        $datalist= Faq::all()->sortBy('id');
        return view('layouts.faq',['datalist'=>$datalist,'setting'=>$setting]);
    }
    public function barbers(){
        $setting=Setting::first();
        return view('layouts.barbers',['setting'=>$setting]);
    }
    public function services(){
        $setting=Setting::first();
        return view('layouts.services',['setting'=>$setting]);
    }
    public function send($id,$name){
        return view('home.index',['id'=>$id,'name'=>$name]);
    }
    public function contact(){
        $setting=Setting::first();
        return view('layouts.contact',['setting'=>$setting]);
    }
    public function test(){
        return view('home.test');
    }
}
