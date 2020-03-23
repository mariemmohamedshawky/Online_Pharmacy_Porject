<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    //
      public function  products(){

         return $this->belongsTo("Add/user");

     }
}
