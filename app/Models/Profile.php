<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    public function user()
    {
      //$user = User::find($this->user_id) "consulta propia"  
      return $this->belongsTo('App\Models\User');//metodo de laravel
    }
}
