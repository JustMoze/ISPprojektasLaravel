<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    //
    public function hotel()
    {
      return $this->belongs('App\Models\Hotel');
    }
}
