@extends('layouts.app')
@section('search-field')
<div class="row search_div">
  <div class="col-lg-4 col-md-4 col-sm-6">
  </div>
  <div class="col-lg-4 col-md-4 col-sm-12 search_col">
    <form method="get" action="/search" class="form-inline md-form form-sm">
      <input class="form-control form-control-sm mr-3 w-75" name="searchLine" type="search" placeholder="Search" aria-label="Search">
      <button type="submit" name="button" class="search_button"><i class="fas fa-search" aria-hidden="true"></i> Search</button>
    </form>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-12">
  </div>
</div>
@endsection
@section('content')
<section class="pricing" id="press">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
      <div class="dropdown filter-btn">
        <button class="btn btn-secondary dropdown-toggle color-btn-filter1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Filtruoti pagal kambario tipą
        </button>
        <div class="dropdown-menu a-filters" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" type="submit" id="aLink" href="?tipas=1">Liuksas</a>
          <a class="dropdown-item" type="submit" id="aLink" href="?tipas=2">Karališkas</a>
          <a class="dropdown-item" type="submit" id="aLink" href="?tipas=3">Ekonominis</a>
          <a class="dropdown-item" type="submit" id="aLink" href="?tipas=4">Rūkančiųjų</a>
          <a class="dropdown-item" type="submit" id="aLink" href="?tipas=5">Verslo klasės</a>
        </div>
      </div>
      <div class="dropdown filter-btn">
        <button class="btn btn-secondary dropdown-toggle color-btn-filter2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Filtruoti pagal kambario kainą
        </button>
        <div class="dropdown-menu a-filters" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" id="aLink" href="?sort=asc">Didėjančiai</a>
          <a class="dropdown-item" id="aLink" href="?sort=desc">Mažėjančiai</a>
        </div>
      </div>
    </div>
  </div>
  <h1 class="h1-room-title">Kambariai</h1>
  @can('usersManagement')
  <button type="button" onclick="window.location='AddRoom/'" class="rooms_btn btn btn-lg btn-block btn-dark">
    <a>
      Pridėti kambarį
    </a>
  </button>
  @endcan
  <div class="row">
    @foreach($rooms as $room)
    <div class="pricing-cards col-lg-4">
      <div class="card-img card">
        <img src="{{$room->kambario_nuotrauka}}" alt="room-image">
        <div class="color-room card-body">
          <h3>Kambario numeris: {{$room->id}}</h3>
          <h4>Kaina: {{$room->kaina}}€</h4>
          <p>{{$room->apibudinimas}}</p>
          <button type="button" onclick="window.location='rooms/{{$room->id}}'" class="rooms_btn btn btn-lg btn-block btn-dark">
            <a>
              Peržiūrėti
            </a>
          </button>
          @can('usersManagement')
          <button type="button" onclick="window.location='rooms/{{$room->id}}/edit'" class="rooms_btn btn btn-lg btn-block btn-dark">
            <a>
              Redaguoti
            </a>
          </button>
          @endcan
        </div>
      </div>
    </div>
    @endforeach
    <?php
    $max = sizeof($rooms);
    if ($max <= 0) {
      echo "<h1>Nerastas nei vienas kambarys.</h1>";
    } ?>
    <div class="pagination">
      {{ $rooms->links() }}
    </div>
  </div>
</section>
@endsection
@section('lowFooter')
footer-main
@endsection