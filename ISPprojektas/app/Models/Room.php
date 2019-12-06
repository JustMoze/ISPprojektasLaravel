<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Rezervacija;
class Room extends Model
{
  public function Rezervacijos()
  {
    return $this->hasMany(Rezervacija::class);
  }
  public function getId()
  {
    return $this->id;
  }
}
