<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    //Relacion Uno a Muchos (Inversa) con User
    public function user(){
        return $this->belongsTo('App\Models\user');
    }
}
