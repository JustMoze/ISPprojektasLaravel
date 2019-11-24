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
  <link href="https://fonts.googleapis.com/css?family=Montserrat:700|Ubuntu&display=swap" rel="stylesheet">
  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/b6e025948a.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
  <title>KTU hotel managers</title>
</head>

<body>
  <!-- Navbar -->
  <section class="navbar-spalva">
      <nav class="navbar navbar-expand-md navbar-dark">
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
              <a class="nav-link menu_items" href="/rooms">Rooms</a>
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
      @yield('search-field')
  </section>


  <!-- main section -->
  @yield('content')

  <!-- Footer -->
  <footer id="footer" class="container-fluid">
    <i class="footer-icon-line fab fa-twitter fa-2x"></i>
    <i class="footer-icon-line fab fa-facebook fa-2x"></i>
    <i class="footer-icon-line fab fa-instagram fa-2x"></i>
    <i class="footer-icon-line fas fa-envelope fa-2x"></i>
    <p>Copyright 2019 &copy; KTU hotel managers</p>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
  </body>

  </html>
