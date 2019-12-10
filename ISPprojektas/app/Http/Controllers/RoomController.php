<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoomRequest;
use DB;

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
    } else if (request()->has('sort')) {
      // code...
      $rooms = Room::orderBy('kaina', request('sort'))
        ->paginate(9)
        ->appends('sort', request('sort'));
    } else {
      $rooms = Room::paginate(9);
    }
    return view('rooms')->with('rooms', $rooms);
  }

  public function search()
  {
    if (request()->has('searchLine')) {
      $line = request('searchLine');
      $rooms = Room::where('apibudinimas', 'LIKE', '%' . $line . '%')
        ->paginate(9)
        ->appends('apibudinimas', request('searchLine'));
    } else {
      $rooms = Room::paginate(9);
    }
    return view('rooms')->with('rooms', $rooms);
  }
  public function submit(Request $request)
  {
    $room = new Room();
    $room->kaina = $request->input('kaina');
    $room->plotas = $request->input('plotas');
    $room->tipas = $request->input('type');
    $room->vietu_skaicius = $request->input('vietos');
    $room->kambario_nuotrauka = $request->input('img');
    $input1= $request->input('jura');
    if($input1=='on'){
      $room->vaizdas_i_jura =1;
    }else{
      $room->vaizdas_i_jura =0;
    }
    $input2 = $request->input('gyvunai');
    if($input1=='on'){
      $room->pritaikytas_gyvunams = 1;
    }else{
      $room->pritaikytas_gyvunams = 0;
    }
    $room->apibudinimas = $request->input('comment');
    $room->fk_Viesbutisid_Viesbutis=1;
    
    $room->save();
    return redirect()->route('Room-add-form');
  }
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  { }

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
    return view('sections.RoomEdit')->with('id',$id);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  { $room= DB::table('rooms')->where('id', $id)->first();
    if($request->input('kaina')==""){
      $kaina = $room->kaina;
    }else
    {
      $kaina = $request->input('kaina');
    }
   if($request->input('img')==""){
    $kambario_nuotrauka = $room->kambario_nuotrauka;
   }
   else{
    $kambario_nuotrauka = $request->input('img');
   }
   if($request->input('comment')==""){
    $apibudinimas = $room->apibudinimas;
   }
   else{
    $apibudinimas = $request->input('comment');
   }
    $apibudinimas = $request->input('comment');
    DB::update("UPDATE `rooms` SET `kaina`= '$kaina' ,`kambario_nuotrauka`= '$kambario_nuotrauka', `apibudinimas`='$apibudinimas' WHERE `id`= '$id'");
    return view('home');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  { $Room = Room::find($id);
    $Room->delete();
    return view('home');
  }
}
