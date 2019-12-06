<?php

namespace App\Http\Controllers\Payments;


use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Room;
use App\User;
use App\Http\Requests\PaymentRequest;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function showPayment(Request $request)
    {
       $dateFrom = $request->get('dateFrom');
       $dateTo= $request->get('dateTo');
       $user_id = $request->get('user_id');
       $room_id = $request->get('room_id');
       $rez_id = $request->get('rez_id');
       $room = Room::find($room_id);
       $user = User::find($user_id);
       return view('payment', ['rez_id' => $rez_id, 'user' => $user, 'room' => $room, 'dateTo' => $dateTo, 'dateFrom' => $dateFrom, 'user_id' => $user_id, 'room_id' => $room_id]);
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
    public function updatePayment(Request $request, $room_id, $rez_id, $user_id)
    {
        //
        $user = User::find($user_id);
        $room = Room::find($room_id);
        $payment = new Payment();

        $payment->user_id = $user_id;
        $payment->rezervation_id = $rez_id;
        $payment->cardCode = $request->input('cardNumber');
        $payment->cvv = $request->input('cvv');
        $payment->cardName = $request->input('username');
        $payment->date = $request->input('expireDate');

        $message->save();
        return redirect()->route('home')->with('success', 'Pranešimas sėkmingai buvo išsiūstas');
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
