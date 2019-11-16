@extends('layouts.app')

@section('content')
<section class="main">
  <div class="container-fluid">
    <form class="form-signin">
      <h1 class="mb-3 font-weight-normal">Prašau prisijungti</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="check-left checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
  </div>
</section>
@endsection
