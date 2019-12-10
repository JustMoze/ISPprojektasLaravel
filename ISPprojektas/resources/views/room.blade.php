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
@can('User')
@section('reserve')
<a type="button" class="btn btn-outline rate-btn" type="button" href="{{route('rezervacijarezervacija.index')}}">
  <i class="fas fa-shopping-cart cart"></i>
  Rezervuoti kambarį</a>
<?php
session_start();
$_SESSION["roomID"] = $room->id;
?>
@endsection
@endcan
