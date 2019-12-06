<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Room;
use App\Models\Payment;
class Rezervacija extends Model
{
  public function User()
  {
    return $this->belongsTo(User::class);
  }
  public function Room()
  {
    return $this->belongsTo(Room::class);
  }
  public function payment()
  {
    return $this->hasOne(Payment::class);
  }
}
