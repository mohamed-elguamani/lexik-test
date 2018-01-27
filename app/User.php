<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
class User extends Model
{

   protected $dates = [
        'birthday'
    ];

    //relationship belongsTo between User and group
    public function group(){

        return $this->belongsTo('App\Group');
    }



    //calculate user age
    public function age() {
        return $this->birthday->diffInYears(Carbon::now());
    }
}
