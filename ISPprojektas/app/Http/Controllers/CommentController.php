<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atsiliepimas;
use App\Models\Room;
use App\User;
use Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atsiliepimai = Atsiliepimas::all();

        return view('Comments')->with('Atsiliepimai', $atsiliepimai);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('Addcomment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,
        [
          'rating' => 'required'
        ]
      );

      $atsiliepimas =

      $atsiliepimai = new Atsiliepimas();
      $atsiliepimai->rating = $request->input('rating');
      $atsiliepimai->title = $request->input('title');
      $atsiliepimai->message = $request->input('message');
      $atsiliepimai->room_id = $request->input('room-id');
      $atsiliepimai->user_id = $request->input('user-id');
      $atsiliepimai->save();

      return redirect('rooms/ '. $request->input('room-id'))->with('success', 'Atiliepimas sukurtas sėkmingai');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function createComment(int $id)
    {
      return view('Addcomment')->with('roomId', $id);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
