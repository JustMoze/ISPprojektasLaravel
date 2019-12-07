<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Rezervacija;

class Payment extends Model
{
    //
    public function user()
    {
      return $this->belongsTo('App\User');
    }
    public function rezervation()
    {
      return $this->belongsTo(Rezervacija::class);
    }

}
