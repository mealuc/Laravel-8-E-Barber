<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
 //   public function index(){
 //       return view('home.index');
 //   }
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
            return view('admin.login');
        }
    }
    public function login(){
        return view('admin.login');
    }
    public function home(){
        return view('layouts.home');
    }
    public function about(){
        return view('layouts.about');
    }
    public function appoint(){
        return view('layouts.appointment');
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
        return view('layouts.contact');
    }
    public function test(){
        return view('home.test');
    }
}
