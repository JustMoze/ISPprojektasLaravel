<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ComplaintRequest;
use App\Models\Nusiskundimas;

class ComplaintController extends Controller
{
    public function submit(ComplaintRequest $request){
      $nusiskundimas = new Nusiskundimas();
      $nusiskundimas->title = $request->input('title');
      $nusiskundimas->message = $request->input('message');
      $nusiskundimas->save();

      return redirect()->route('home');
    }

    public function getNusiskundimai(){
      $nusiskundimai = Nusiskundimas::all();

      return view('Complaints', ['Nusiskundimai' => $nusiskundimai]);
    }
}
