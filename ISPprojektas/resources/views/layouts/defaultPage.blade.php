<!DOCTYPE html>
<html lang="en" dir="ltr">
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
  <style media="screen">
    table {
      border: 1px solid;
    }
  </style>
</head>

<body>
  @csrf
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #3f72af;">
    <a class="navbar-brand logo_font" href=""><span class="logo_KTU">KTU</span>hotel managers</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
  @yield('content')
</body>
<footer id="footer" class="container-fluid">
  <i class="footer-icon-line fab fa-twitter fa-2x"></i>
  <i class="footer-icon-line fab fa-facebook fa-2x"></i>
  <i class="footer-icon-line fab fa-instagram fa-2x"></i>
  <i class="footer-icon-line fas fa-envelope fa-2x"></i>
  <p>© Copyright 2019 Modestas Rimeikis karkasai</p>
</footer>

</html>
