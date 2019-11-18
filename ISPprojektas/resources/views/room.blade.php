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
