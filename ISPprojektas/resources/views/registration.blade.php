@extends('layouts.app')

@section('content')

<section class="main">
  <div class="container-fluid">
    <form class="form-signin">
      <h1 class="mb-3 font-weight-normal">Prašau registruotis</h1>
      <div class="form-control-pad">
          <label for="inputName" class="sr-only">Name</label>
          <input type="text" id="inputName" class="form-control" placeholder="Name" required autofocus>
        </div>
        <div class="form-control-pad">
          <label for="inputSuraname" class="sr-only">Email address</label>
          <input type="text" id="inputSuraname" class="form-control" placeholder="Surname" required autofocus>
        </div>
        <div class="form-control-pad">
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        </div>
        <div class="form-control-pad">
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-control-pad">
          <label for="inputRepeatPassword" class="sr-only">Password</label>
          <input type="password" id="inputRepeatPassword" class="form-control" placeholder="Repeat Password" required>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Registruotis</button>
    </form>
  </div>

</section>
@endsection
