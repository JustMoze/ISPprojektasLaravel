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


<section class="pricing" id="press">
  <h1>Rooms</h1>
    <div class="row">
      @php
        $a = 0;
      @endphp
      @if((count($rooms) > 0) && ($a < 3))
        @foreach($rooms as $room)
          <div class="pricing-cards col-lg-4">
            <div class="card-img card">
              <img src="{{$room->kambario_nuotrauka}}" alt="room-image">
              <div class="color-room card-body">
                <h3>Kambario numeris: {{$room->numeris}}</h3>
                <p>Trumpas aprašymas: {{$room->apibudinimas}}</p>
                <button type="button" onclick="window.location='rooms/{{$room->id}}'" class="rooms_btn btn btn-lg btn-block btn-dark">
                  <a>
                    Preview
                  </a>
                </button>
              </div>
            </div>
          </div>
          @php
            $a++
          @endphp
        @endforeach
      @endif
    </div>
</section>

@include('sections.specialOffers')

@endsection
