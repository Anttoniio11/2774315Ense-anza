<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //Relacion Uno a Muchos con post
    public function posts(){
        return $this->hasMany('App\Models\post');
    }
    
}
