<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Rezervacija;
use App\Models\Atsiliepimas;

class Room extends Model
{
  public function Rezervacijos()
  {
    return $this->hasMany(Rezervacija::class);
  }

  public function Atsiliepimai()
  {
    return $this->hasMany(Atsiliepimas::class);
  }

  public function Nusiskundimai()
  {
    return $this->hasMany(Nusiskundimas::class);
  }

  public function getId()
  {
    return $this->id;
  }

}
