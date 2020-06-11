<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mentorminds;
use App\bookings;
use Mail;

class mentormind extends Controller
{
    public function show(){
        return view('frontend/index');
    }

    public function bookings(){
        return view('frontend/bookings-page');
    }

    public function save()
    {
        return view('frontend/tests-page');        
    }
    public function store(Request $req)
    {

       $testing= new mentorminds;

       $testing->test_name=$req->dropdown;
       $testing->lab_name=$req->labs;
        $file=$req->file('prescription_image');
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('uploads',$filename);
        $testing->prescription=$filename;

       $testing->save();
       return redirect('bookings-page');

    }
     public function submitting(Request $main)
    {
        $booking= new bookings;
        $diag=mentorminds::take(1)->orderBy('user_id','DESC')->get();
        $booking->user_id=$diag[0]['user_id'];
         $booking->name=$main->name;
         $booking->emailid=$main->mailid;
         $booking->phonenumber=$main->number;
         $booking->date_of_test=$main->on;
         $booking->time_slot=$main->time;

        $booking->save();
        Mail::send('mail',['name'=>$main->name],function($message) use($main){
                $message->to($main['mailid'])->subject('We got your registration!');
                $message->from('janakiramsharma18@gmail.com','Practo');
            });

        return redirect('show');

    }
    public function generate(){
        return view('frontend/show');
    }
    public function admin(){
        return view('frontend/bookinglist');
    }
    public function show_data(){

        $data=bookings::all();
        return view('frontend/bookinglist',compact('data'));
    }
    
}

