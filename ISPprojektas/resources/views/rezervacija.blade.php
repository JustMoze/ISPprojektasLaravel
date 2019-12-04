@extends('layouts.app')

@section('content')
<?php session_start();
$id =  $_SESSION["roomID"];
?>
<br>
<div>
<label for="DateFrom">Data nuo:⠀</label>
<input type="date" name="DateFrom" min="2019-12-11">
</div>
<div>
<label for="DateTo">Data iki:⠀⠀</label>
<input type="date" name="DateTo" min="2019-12-11">
</div>
<br>
  <table class = "table">
    <thead>
      <th>data dateFrom</th>
      <th>data To</th>
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
