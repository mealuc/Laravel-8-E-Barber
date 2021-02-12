<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $datalist= Appointment::all();
        return view('admin.appointment',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,Appointment $appointment)
    {
        $data= new Appointment();
        $data->user_id = Auth::id();
        $data->price = Product::find($request->input('product_id'))->price;
        $data->product_id = $request->input('product_id');
        $data->date = $request->input('date');
        $data->time = $request->input('time');
        $data->payment = $request->input('payment');
        $data->note = $request->input('note');
        $data->IP = $_SERVER['REMOTE_ADDR'];
        $data->save();
        return back()->with('success','Randevu Kaydedildi!');
        #$data->email = User::find(Auth::id())->email;
        #$data->phone = User::find(Auth::id())->phone;
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment,$id)
    {
        $datalist= Product::all();
        $data= Appointment::find($id);
        return view('admin.appointment_edit',['data'=>$data,'datalist'=>$datalist]);
    }
    public function useredit(Appointment $appointment,$id)
    {
        $datalist= Product::all();
        $data= Appointment::find($id);
        return view('home.user_appointment_edit',['data'=>$data,'datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment,$id)
    {
        $data=Appointment::find($id);
        $data->price = Product::find($request->input('product_id'))->price;
        $data->product_id = $request->input('product_id');
        $data->date = $request->input('date');
        $data->time = $request->input('time');
        $data->payment = $request->input('payment');
        $data->note = $request->input('note');
        $data->status='Edited';
        $data->save();
        return back()->with('success','Appointment Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment,$id)
    {
        $data=Appointment::find($id);
        $data->delete();
        return back()->with('success','Appointment Deleted!');
    }
}
