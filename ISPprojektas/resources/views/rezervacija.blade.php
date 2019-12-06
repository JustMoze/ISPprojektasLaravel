@extends('layouts.app')

@section('content')
<?php session_start();
$id =  $_SESSION["roomID"]

?>

<br>

<form  method="post" action="{{ route('withUser')}}">
  @csrf
  <div class="container-fluid rezervation-inputs">
    <div>
<label for="DateFrom">Data nuo:⠀</label>
<input type="date" name="DateFrom" min="2019-12-11">
</div>
<div>
<label for="DateTo">Data iki:⠀⠀</label>
<input type="date" name="DateTo" min="2019-12-11">
</div>
  <input type="number" name="room_id" class = "invisible" value="{{@$id}}">
  <input type="number" name="user_id" class = "invisible" value="{{Auth::user()->getId()}}">
  <div id = "Rezervuoti">
<button type="submit" value="Rezervuoti" class="btn btn-success">Rezervuoti</button>
</div>
  </div>
</form>
<br>
  <table class = "table table-bordered" id = "Rezervacijulent">
    <thead class="thead-dark">
      <th>Data nuo</th>
      <th>Data iki</th>
    </thead>
    <tbody>
      @foreach($rezervacijos as $rezervacija)

      @if($rezervacija->room_id == @$id)
          <tr>
            <td>{{$rezervacija->dateFrom}}</td>
            <td>{{$rezervacija->dateTo}}</td>
          </tr>
          @endif
      @endforeach
    </tbody>
  </table>
@endsection
