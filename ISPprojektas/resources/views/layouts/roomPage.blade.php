<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- style.css -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu&display=swap" rel="stylesheet">
  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/b6e025948a.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
</head>

<body id="press">
  <section class="navbar-spalva">
      <nav class="navbar navbar-expand-md navbar-dark nav-padding">
        <a class="navbar-brand logo_font" href=""><span class="logo_KTU">KTU</span>HotelManagers</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="nav-padding collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link menu_items" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link menu_items" href="#press">Rooms</a>
            </li>
            <li class="nav-item">
              <a class="nav-link menu_items" href="#pricing">Special orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link menu_items" href="/Profile">Profile</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">Login</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="/Login">Log in</a>
                <a class="dropdown-item" href="/Registration">Sign up</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
  </section>
  <div class="container-fluid foto-mg">
    <div class="row">
      <div class="col-sm-4 col-md-4 col-lg-4">
        <img src="@yield('roomImage')" alt="Kambario nuotrauka" class="room-photo">
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4">
        <h3 class="room-text">Kambario numeris: <span class="room-info"> @yield('roomNumber') </span></h3>
        <h3>Kambario aprašymas: <span class="room-info">@yield('roomType') </span></h3>
        <h3>Kaina: <span class="room-info"> @yield('roomPrice')€</span></h3>
        @yield('reserve')
      </div>
    </div>
    <div class="row second-row">
      <div class="col-sm-1.5 col-md-1.5 col-lg-1.5">
        <button type="button" class="btn btn-outline rate-btn"><i class="fas fa-star star fa-1.5x"></i> Įvertinti</button>
      </div>
      <div class="col-sm-2 col-md-2 col-lg-2">
        <button type="button" class="btn btn-outline rate-btn"><i class="fas fa-fire fire fa-1.5x"></i> Rašyti nusiskundimą</button>
      </div>
    </div>
  </div>
  <footer id="footer" class="container-fluid">
    <i class="footer-icon-line fab fa-twitter fa-2x"></i>
    <i class="footer-icon-line fab fa-facebook fa-2x"></i>
    <i class="footer-icon-line fab fa-instagram fa-2x"></i>
    <i class="footer-icon-line fas fa-envelope fa-2x"></i>
    <p>© Copyright 2019 KTU hotel managers</p>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="{{asset('js.app.js')}}" charset="utf-8"></script>
  </body>

  </html>
