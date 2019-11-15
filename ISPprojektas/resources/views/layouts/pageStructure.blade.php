<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=McLaren&display=swap" rel="stylesheet">
  <title>Skolų už mokslą suvedimo sistema </title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/loginStyle.css')}}">
  <style>
    footer {
      margin-top: 27%;
    }
  </style>
</head>

<body>
  <!-- navbar -->
  <nav>


    <ul class="nav justify-content-end">
      <li class="nav-item title">
        <p>Už <span class="nav-span">Mokslą</span></p>
      </li>
      <li class="nav-item reg-topic">
        @yield('topic')
      </li>
    </ul>
  </nav>

  @yield('content')

<footer>
  <div class="footer-copyright text-center py-3 footerTitle">© 2019 Copyright:
    <a class="footerTitle" href="https://www.linkedin.com/in/modestas-rimeikis/"> KTU hotel managers</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<!-- Footer -->
</body>

</html>
