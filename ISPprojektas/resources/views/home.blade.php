@extends('layouts.app')

@section('content')
<section id="showcase">
  <div class="container">
    <h1>Find your ideal room for rent</h1>
  </div>
</section>

<!-- Features -->
<section id="features">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 feature-box">
      <i class="fas fa-bed fa-5x icons"></i>
      <h3>Easy to find perfect room</h3>
      <p>We can offer a room even for the most demanding clients</p>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 feature-box">
      <i class="fas fa-bolt fa-5x icons"></i>
      <h3>Fast service</h3>
      <p>It takes just few seconds to reservate a room </p>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 feature-box">
      <i class="far fa-money-bill-alt fa-5x icons"></i>
      <h3>Lowest prices</h3>
      <p>We can offer you chiepest rooms around you</p>
    </div>
  </div>
</section>

@include('sections.roomCards')
@include('sections.specialOffers')

@endsection
