<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public function profile(){
        //$profile = Profile::where('user_id',$this->id)->first();
       return $this->hasOne('App\Models\Profile');
   }

    // Relacion Uno a Muchos con post
    public function posts(){
        return $this->hasMany('App\Models\Post');
    }

     // Relacion Uno a Muchos con videos
     public function videos(){
        return $this->hasMany('App\Models\Video');
    }
}
