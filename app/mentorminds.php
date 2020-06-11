<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mentorminds extends Model
{
    //
   protected $table= 'tests';
   public $timestamps=false;


   protected $fillable=[
       'test_name',
       'lab_name',
       'prescription',
   ];

   public function bookings(){
       return $this->hasOne(bookings::class,'user_id','booking_id');
   }
}
