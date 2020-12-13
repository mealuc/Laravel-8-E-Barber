<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }
    public function about(){
        return view('home.about');
    }
    public function send($id,$name){
        return view('home.index',['id'=>$id,'name'=>$name]);
    }
    public function test(){
        return view('home.test');
    }
}
