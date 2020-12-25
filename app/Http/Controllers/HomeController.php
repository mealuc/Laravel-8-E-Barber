<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
 //   public function index(){
 //       return view('home.index');
 //   }
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
