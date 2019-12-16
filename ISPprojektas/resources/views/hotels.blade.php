@extends('layouts.app')

@section('content')
@foreach($hotels as $hotel)
<div class="container-fluid">
  <table class="table table-bordered table-modules">
    <thead class="thead-dark">
      <tr>
        <th>Viešbučio pavadinimas - {{$hotel->name}}</th>
      </tr>
    </thead>
    <tbody class="table-color">
      <tr>
        <th>Adresas - {{$hotel->address}}</th>
      </tr>
      <tr>
        <th>Viešbučio darbo valandos - {{$hotel->workTime}}</th>
      </tr>
      <tr>
        <th>Viešbučio darbuotojų skačius - {{$hotel->workerCount}}</th>
      </tr>
      <tr>
        <th>Darbuotojai:</th>
      </tr>
    </tbody>
  </table>
  <div class="row hotelRow">
    @php
      $workers = $hotel->workers;
    @endphp
    @foreach($workers as $worker)
    <div class="col-sm-4 col-md-4 col-lg-4">
      <div class="card card-img-top" style="width: 18rem;">
        <img src="{{$worker->image}}" class="card-img-top" alt="...">
        <div class="workCardHead">
          <p>{{$worker->name}} {{$worker->surname}}</p>
        </div>
        <div class="card-body cardBodyWork">
          <h4>Pareigos - {{$worker->position}}</h4>
          <h5>Kontaktai: El. paštas - {{$worker->position}}, telefono numeris - {{$worker->phoneNr}}</h5>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endforeach
@endsection
@section('lowFooter')
  footer-main
@endsection
