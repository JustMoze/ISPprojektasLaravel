<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     // displays rooms
    public function index()
    {
        //
        if (request()->has('tipas')) {
          // code...
          $rooms = Room::where('tipas', request('tipas'))
          ->paginate(9)
          ->appends('tipas', request('tipas'));
        }
        else if (request()->has('sort')) {
          // code...
          $rooms = Room::orderBy('kaina', request('sort'))
          ->paginate(9)
          ->appends('sort', request('sort'));
        }
        else{
          $rooms = Room::paginate(9);
        }
        return view('rooms')->with('rooms', $rooms);
    }

    public function search()
    {
      if (request()->has('searchLine')) {
        $line = request('searchLine');
        $rooms = Room::where('apibudinimas', 'LIKE', '%'.$line.'%')
        ->paginate(9)
        ->appends('apibudinimas', request('searchLine'));
      }
      else{
        $rooms = Room::paginate(9);
      }
      return view('rooms')->with('rooms', $rooms);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room = Room::with('Atsiliepimai')->find($id);
       //  dd($room);
        return view('room')->with('room', $room);
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
