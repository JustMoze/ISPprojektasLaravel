@extends('layouts.app')

@section('content')
  <div class="container-fluid specFlui">
    <div class="row specRow">
      <div class="col-sm-4 col-md-4 col-lg-4"></div>
      <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="container-fluid whiteContainer">
          <div style="width:800px; height:650px; padding:20px; text-align:center; border: 10px solid #787878">
          <div style="width:750px; height:590px; padding:20px; text-align:center; border: 5px solid #787878">
                 <span style="font-size:50px; font-weight:bold">Rezervacijos saskaita</span>
                 <br><br>
                 <span style="font-size:25px"><i>Kliento vardas ir pavardė </i></span>
                 <br><br>
                 <span style="font-size:30px"><b>{{$user->name}}</b></span><br/><br/>
                 <span style="font-size:25px"><i>Rezervuoto kambario numeris - {{$room->id}}</i></span> <br/><br/>
                 <span style="font-size:30px">Rezervacijos kaina - {{$totalPrice}}€ </span> <br/><br/>
                 <span style="font-size:20px">Laikotarpis - <b>{{$rezervacija->dateFrom}} - {{$rezervacija->dateTo}}</b></span> <br/><br/><br/><br/>
                 <span style="font-size:25px"><i></i>Pasirašyta - {{$rezervacija->updated_at}}</span><br>
                <span style="font-size:30px">KTU hotel managers</span>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('lowFooter')
footer-main
@endsection
