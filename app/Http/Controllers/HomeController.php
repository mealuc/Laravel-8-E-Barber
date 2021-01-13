<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
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
        return view('layouts.home',['setting'=>$setting]);
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
        return view('layouts.about');
    }
    public function appoint(){
        return view('layouts.appointment');
    }

    public function faq(){
        return view('layouts.faq');
    }

    public function barbers(){
        return view('layouts.barbers');
    }
    public function services(){
        return view('layouts.services');
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
