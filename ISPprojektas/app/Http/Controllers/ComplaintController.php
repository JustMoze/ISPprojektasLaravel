<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nusiskundimas;
use App\Models\Room;
use App\User;
use Auth;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $nusiskundimai = Nusiskundimas::all();

      return view('Complaints')->with('Nusiskundimai', $nusiskundimai);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('Addcomplaint');
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
          'title' => 'required',
          'message' => 'required'
        ]
      );

      $nusiskundimai = new Nusiskundimas();
      $nusiskundimai->title = $request->input('title');
      $nusiskundimai->message = $request->input('message');
      $nusiskundimai->room_id = $request->input('room-id');
      $nusiskundimai->user_id = $request->input('user-id');
      $nusiskundimai->save();

      return redirect('rooms/ '. $request->input('room-id'))->with('success', 'Nusiskundimas sukurtas sėkmingai');
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

    public function createComplaint(int $id)
    {
      return view('Addcomplaint')->with('roomId', $id);
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
