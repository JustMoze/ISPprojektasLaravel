<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    //
    public function workers()
    {
      return $this->hasMany('App\Models\Worker');
    }
}
