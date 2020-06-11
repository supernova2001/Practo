<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bookings extends Model
{
    //
       protected $table= 'bookings';
   public $timestamps=false;
    public function mentorminds(){
        return $this->belongsTo(mentorminds::class,'user_id','user_id');
    }

}
