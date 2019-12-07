<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Room;
use App\User;

class Atsiliepimas extends Model
{
  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function Room()
  {
    return $this->belongsTo(Room::class);
  }
}
