<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //Relationship HasMany between Group and User

    public function users(){

        return $this->hasMany('App\User');
    }

}
