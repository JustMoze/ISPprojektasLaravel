<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Models\Atsiliepimas;

class CommentController extends Controller
{
    public function submit(CommentRequest $request){
      $atsiliepimas = new Atsiliepimas();
      $atsiliepimas->rating = $request->input('rating');
      $atsiliepimas->title = $request->input('title');
      $atsiliepimas->message = $request->input('message');
      $atsiliepimas->save();

      return redirect()->route('home');
    }

    public function getAtsiliepimus(){
      $atsiliepimai = Atsiliepimas::all();

      return view('Comments', ['Atsiliepimai' => $atsiliepimai]);
    }
}
