<?php

namespace App\Http\Controllers\Rezervacija;

use Illuminate\Http\Request;
use App\Models\Rezervacija;
use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Http\Requests\RezervationRequest;
use App\User;
use Carbon\Carbon;
use Auth;
use Mail;

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
    public function myRezervations()
    {
        $user_id = Auth::user()->getId();
        $user = User::find($user_id);
        $rezarvacijos = $user->Rezervacijos;
        $counter = 0;
        foreach ($rezarvacijos as $rezervacija) {
          // code...
          $counter += 1;
        }
        return view('myRezervations')->with(['rezervacijos' => $rezarvacijos, 'counter' => $counter]);
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
    public function sertificate($id)
    {
      $rezervacija = Rezervacija::find($id);
      $room = Room::find($rezervacija->room_id);
      $firstDay = Carbon::parse($rezervacija->dateFrom);
      $lastDay = Carbon::parse($rezervacija->dateTo);
      $days =  $firstDay->diffInDays($lastDay, false);
      $totalPrice = $days * $room->kaina;
      $user = User::find($rezervacija->user_id);
      return view('sertificate')->with(['room' => $room, 'rezervacija' => $rezervacija, 'totalPrice' => $totalPrice, 'user' => $user]);
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
    public function storeDate(Request $request)
    {

      $rezervacija = new Rezervacija();
      $rez_id = $rezervacija->id;
      $dateFrom = $request->input('DateFrom');
      $dateTo = $request->input('DateTo');
      $user_id = $request->input('user_id');
      $room_id = $request->input('room_id');
      $user = User::find($user_id);
      $room = Room::find($room_id);
      return redirect()->route('payment-page', ['room' => $room, 'user' => $user, 'rez_id' => $rez_id, 'dateTo' => $dateTo, 'dateFrom' => $dateFrom, 'user_id' => $user_id, 'room_id' => $room_id]);
    }
    public function rezervationChecker(Request $request)
    {
      $this->validate($request,
        [
          'expirationDate' => 'required',
          'cardName' => 'required|string',
          'cardNumber' => 'required',
          'cvv' => 'required|integer|max:999'
        ]
      );

      $rezervacija = new Rezervacija();
      $user_id = $request->get('user_id');
      $user = User::find($user_id);
      $paymentCards = $user->payments;
      $room_id = $request->get('room_id');
      $room = Room::find($room_id);
      $roomPrice = $room->kaina;
      $rezervacijos = $room->Rezervacijos;
      $rez_id = $rezervacija->id;
      $dateFrom = $request->get('dateFrom');
      $dateTo = $request->get('dateTo');
      $firstDay = Carbon::parse($request->get('dateFrom'));
      $lastDay = Carbon::parse($request->get('dateTo'));
      $days =  $firstDay->diffInDays($lastDay, false);
      // values for checking card info
      $cardName = $request->get('cardName');
      $cardNumber = $request->get('cardNumber');
      $expirationDate = $request->get('expirationDate');
      $cvv = $request->get('cvv');
      $totalPrice = $roomPrice*$days;
      foreach($paymentCards as $card)
      {
        $moneyAmount = $card->amount;
        if ($moneyAmount >= $totalPrice && $card->cardCode == $cardNumber && $card->cardName == $cardName && $card->date == $expirationDate && $card->cvv == $cvv ) {
        // code...
          $free = true;
          foreach ($rezervacijos as $kambario_rezervacija) {
              if ($kambario_rezervacija->dateFrom >= $dateFrom && $kambario_rezervacija->dateFrom <= $dateTo || $kambario_rezervacija->dateFrom <= $dateFrom && $kambario_rezervacija->dateTo >= $dateTo || $kambario_rezervacija->dateTo >= $dateFrom &&
              $kambario_rezervacija->dateTo <= $dateTo || $dateFrom>= $dateTo) {
                $free = false;
              }
          }
          if($free){
            $rezervacija->dateFrom = $dateFrom;
            $rezervacija->dateTo = $dateTo;
            $rezervacija->user_id = $user_id;
            $rezervacija->room_id = $room_id;
            $rezervacija->card_id = $card->id;
            $rezervacija->save();
            $data = array(

              'email' => $user->email,
              'subject' => "Rezervacija",
              'bodyMessage' => "Sekmingai uzsirezervavote"
            );
            Mail::send('email.contact', $data, function($message) use ($data){
              $message->from('KTUmenegers@gmail.com');
              $message->to($data['email']);
              $message->subject($data['subject']);
            });
            $card->amount = $moneyAmount - $totalPrice;
            $user->payments()->save($card);
            return redirect('home')->with('success', 'Rezervacija įvykdyta sėkmingai');
            break;
          }
          else{
            return redirect()->route('rezervacijarezervacija.index')->with('danger', 'Pasirinktas laikas yra klaidingas');
          }
        }
      }
      return redirect()->route('withUser')->with('danger', 'Klaidingi Kreditinės kortelės duomenys arba nepakanka pinigų jūsų sąskaitoje');

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
