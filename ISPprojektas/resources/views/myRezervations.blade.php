@extends('layouts.app')
@section('bodyColor')
  myRezervations-body
@endsection
@section('lowFooter')
  lowerFooter
@endsection
@section('content')
<div class="container-fluid myRezervations">
  @if($counter > 0)
  <table class="table table-bordered table-modules">
    <thead class="thead-dark">
      <th>Nuo</th>
      <th>Iki</th>
      <th>Kambario numeris</th>
      <th>Saskaita</th>
      <th>Atšaukti rezervaciją</th>
    </thead>
    <tbody class="table-color">
      @foreach($rezervacijos as $rezervacija )
      <tr>
        <td>{{$rezervacija->dateFrom}}</td>
        <td>{{$rezervacija->dateTo}}</td>
        <td>{{$rezervacija->room_id}}</td>
        <td><a type="button" class="btn info-button" href="{{route('sertificate', $rezervacija->id )}}"><i class="fas fa-file-certificate fa-2x">Išrašas</i></a></td>
        <td>
          <form action = "{{route('rezervacijarezervacija.destroy', $rezervacija->id)}}" method = "post">
            @csrf
            {{method_field('DELETE')}}
            <button type="submit" class="btn btn-danger" href=""><i class="fas fa-trash-alt"></i> Atšaukti rezervaciją</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a href="/home" type="button" class="btn btn-danger myRezervations-back">Grįžti atgal</a>
  @else
    <h1 class="myRezervations-h1">Kol kas nesate užsirezervavęs kambario</h1>
    <div class="row mainRezerv-row">
      <div class="col-md-12 .offset-md-8">
        <h2 class="myRezervations-h2">Tai galite padaryti čia:</h2>
        <i class="fas fa-hand-point-down fa-5x myRezervIcon"></i>
        <br>
        <a href="/rooms" type="button" class="btn btn-success">Kambariai</a>
      </div>
    </div>
  @endif
</div>
@endsection
