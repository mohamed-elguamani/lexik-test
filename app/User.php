<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //relationship belongsTo between User and group
    public function group(){

        return $this->belongsTo('App\Group');
    }

    // //calculate user age
    // public function age() {
    //     return $this->birthday->diffInYears(\Carbon::now());
    // }
}
