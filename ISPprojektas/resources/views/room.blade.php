@extends('layouts.roomPage');

@section('roomImage')
  {{$room->kambario_nuotrauka}}
@endsection
@section('roomNumber')
  {{$room->id}}
@endsection
@section('roomType')
  {{$room->apibudinimas}}
@endsection
@section('roomPrice')
  {{$room->kaina}}
@endsection
@section('reserve')
  <button type="button" class="btn btn-outline rate-btn" type="button" onclick="window.location='./{{$room->id}}/Payment'">
    <i class="fas fa-shopping-cart cart"></i>
    Rezervuoti kambarį</button>
  <a href="{{route('rezervacijarezervacija.index')}}"class="btn btn-outline rate-btn" type="button">Rezervacijų sarasas</a>
<?php
session_start();
$_SESSION["roomID"] = $room->id;
?>
@endsection
