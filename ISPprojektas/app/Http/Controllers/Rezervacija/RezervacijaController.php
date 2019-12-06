<?php

namespace App\Http\Controllers\Rezervacija;

use Illuminate\Http\Request;
use App\Models\Rezervacija;
use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Http\Requests\RezervationRequest;

class RezervacijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rezarvacijos = Rezervacija::orderBy('dateFrom')->get();
        // dd($rezarvacijos);
        return view('rezervacija')->with('rezervacijos', $rezarvacijos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function compare($id)
     {

       $room = Room::find($id);
       dd($room);

     }
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
        $rezervacija = new Rezervacija();

    }
    public function storeByUser(Request $request)
    {
        //

        $rezervacija = new Rezervacija();
        $rez_id = $rezervacija->id;
        $dateFrom = $request->input('DateFrom');
        $dateTo = $request->input('DateTo');
        $user_id = $request->input('user_id');
        $room_id = $request->input('room_id');

        $rezervacijos = Room::find($room_id)->Rezervacijos;
        $free = true;
        foreach ($rezervacijos as $kambario_rezervacija) {
          //
            // code...
            if ($kambario_rezervacija->dateFrom >= $dateFrom && $kambario_rezervacija->dateFrom <= $dateTo || $kambario_rezervacija->dateFrom <= $dateFrom && $kambario_rezervacija->dateTo >= $dateTo || $kambario_rezervacija->dateTo >= $dateFrom && $kambario_rezervacija->dateTo <= $dateTo || $dateFrom >= $dateTo) {
              $free = false;
            }
        }
        if($free){
        $rezervacija->dateFrom = $dateFrom;
        $rezervacija->dateTo = $dateTo;
        $rezervacija->user_id = $user_id;
        $rezervacija->room_id = $room_id;
        $rezervacija->save();
        return redirect()->route('payment-page', ['rez_id' => $rez_id, 'dateTo' => $dateTo, 'dateFrom' => $dateFrom, 'user_id' => $user_id, 'room_id' => $room_id]);
      }
      else{
        return redirect()->route('rezervacijarezervacija.index');
      }

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
