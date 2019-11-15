<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
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
  <script src="https://kit.fontawesome.com/b6e025948a.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
  <link rel="icon" href="favicon.ico">
  <title>KTU hotel managers</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #3f72af;">
    <a class="navbar-brand logo_font" href=""><span class="logo_KTU">KTU</span>hotel managers</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link menu_items" href="">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link menu_items" href="#press">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link menu_items" href="#pricing">Special orders</a>
        </li>
        <li class="nav-link dropdown-toggle pt-0 mr-auto" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <a class="nav-link menu_items" href="">Login</a>
          <div class="dropdown-menu mr-auto" style="left: 92%; background-color:  #dbe2ef;" aria-labelledby="navbarDropdown">
            <a class="dropdown-item nav-link" href="{{asset('login-Form')}}">Log in</a>
            <a class="dropdown-item nav-link" href="/Registration">Sign up</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Log off</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link menu_items" href="/Profile">Profile</a>
        </li>
      </ul>
    </div>
  </nav>
  @yield('search&filters')
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
  @yield('content')
  <section id="cta" class="container-fluid">

    <h3 class="footer-title">Find the room for your desires </h3>
    <button class="footer-button btn-lg btn-outline btn-dark" type="button"><i class="fab fa-apple"></i>Download</button>
    <button class="footer-button2 btn-lg btn-outline btn-light" type="button btn-lg btn-outline"><i class="fab fa-google-play"></i>Download</button>

  </section>

  <!-- Footer -->

  <footer id="footer" class="container-fluid">
    <i class="footer-icon-line fab fa-twitter fa-2x"></i>
    <i class="footer-icon-line fab fa-facebook fa-2x"></i>
    <i class="footer-icon-line fab fa-instagram fa-2x"></i>
    <i class="footer-icon-line fas fa-envelope fa-2x"></i>
    <p>© Copyright 2019 Modestas Rimeikis karkasai</p>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS --> -->
  </body>

  </html>
