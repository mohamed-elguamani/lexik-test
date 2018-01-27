<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //relationship belongsTo between User and group
    public function group(){

        return $this->belongsTo('App\Group');
    }
}
