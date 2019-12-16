@extends('layouts.app')

@section('content')
<section id="showcase">
  <div class="container">
    <h1>Atrask svajonių kambarį!</h1>
  </div>
</section>

<!-- Features -->
<section id="features">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 feature-box">
      <i class="fas fa-bed fa-5x icons"></i>
      <h3>Lengva atrasti labiausiai tinkantį kambarį</h3>
      <p>Mes galime pasiūlyti kambarį net ir paties išrankiausiams mūsų klientams</p>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 feature-box">
      <i class="fas fa-bolt fa-5x icons"></i>
      <h3>Greitas aptarnavimas</h3>
      <p>Tik kelios sekundės iki nuostabaus kambario rezervavimo </p>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 feature-box">
      <i class="far fa-money-bill-alt fa-5x icons"></i>
      <h3>Mažiausios kainos</h3>
      <p>Mes siulome tik pigiausius kambarius!</p>
    </div>
  </div>
</section>

@include('sections.specialOffers')

@endsection
@section('info')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-5 col-md-5 col-lg-5"></div>
    <div class="col-sm-2 col-md-2 col-lg-2 information">
      <a type="button" class="btn info-button" href="{{route('info')}}"><i class="fas fa-info fa-2x"> Informacija</i></a>
    </div>
  </div>
</div>
@endsection
@section('lowFooter')
  footer-main
@endsection
