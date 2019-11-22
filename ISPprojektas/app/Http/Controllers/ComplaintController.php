<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ComplaintRequest;

class ComplaintController extends Controller
{
    public function submit(ComplaintRequest $request){
      return 213;
    }
}
