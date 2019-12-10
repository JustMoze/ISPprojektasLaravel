<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu&display=swap" rel="stylesheet">
  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/b6e025948a.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/paymentStyle.css')}}">
  <link rel="icon" href="favicon.ico">
  <title>KTU hotel managers</title>
</head>

<body class="@yield('bodyColor')">
  <section class="navbar-spalva">
    <nav class="navbar navbar-expand-md navbar-dark">
      <a class="navbar-brand logo_font" href=""><span class="logo_KTU">KTU</span>HotelManagers</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="nav-padding collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link menu_items " href="/">Pagrindinis puslapis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link menu_items" href="/rooms">Kambariai</a>
          </li>
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Prisijungti</a>
          </li>
          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Registruotis</a>
          </li>
          @endif
          @else
          <li class="nav-item">
            <a class="nav-link menu_items" href="{{route('my-rezervations')}}">Mano rezervacijos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link menu_items {{ Request::route()->getName() === 'profile' ? 'active' : '' }}" href="{{ route('profile-window') }}">Profile</a>
          </li>
              <!--  gates  -->
              @can('usersManagement')
              <li class="nav-item">
              <a class="nav-link" href="{{route('admin.users.index')}}">Vartotojų langas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/Discounts">Nuolaidos</a>
              </li>
              @endcan
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
          @endguest
          <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Atsijungti
              </a>
          </li>
        </ul>
      </div>
    </nav>
    @yield('search-field')
  </section>
  <!-- main section -->
  @yield('content')
  <!-- Footer -->
  <footer id="footer" class="container-fluid @yield('lowFooter')">
    <i class="footer-icon-line fab fa-twitter fa-2x"></i>
    <i class="footer-icon-line fab fa-facebook fa-2x"></i>
    <i class="footer-icon-line fab fa-instagram fa-2x"></i>
    <i class="footer-icon-line fas fa-envelope fa-2x"></i>

    <p>Copyright 2019 &copy; KTU hotel managers</p>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="{{asset('js\app.js')}}" charset="utf-8"></script>

</body>

</html>
