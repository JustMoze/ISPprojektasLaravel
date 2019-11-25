@extends('layouts.app')

@section('content')

<section class="main">
  <div class="container-fluid">
    <form class="form-signin regin-padding">
      <h1 class="mb-3 font-weight-normal">Prašau registruotis</h1>
      <div class="form-control-pad">
          <label for="inputName" class="sr-only">Jūsų vardas</label>
          <input type="text" id="inputName" class="form-control" placeholder="Vardas" required autofocus>
        </div>
        <div class="form-control-pad">
          <label for="inputSuraname" class="sr-only">Jūsų pavardė</label>
          <input type="text" id="inputSuraname" class="form-control" placeholder="Pavardė" required autofocus>
        </div>
        <div class="form-control-pad">
          <label for="inputEmail" class="sr-only">Elektroninis paštas</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="E-paštas" required autofocus>
        </div>
        <div class="form-control-pad">
          <label for="inputEmail" class="sr-only">Gimimo metai</label>
          <input type="date" id="inputEmail" class="form-control" placeholder="Gimimo metai" required autofocus>
        </div>
        <div class="form-control-pad">
          <label for="inputEmail" class="sr-only">Adresas</label>
          <input type="text" id="inputEmail" class="form-control" placeholder="E-paštas" required autofocus>
        </div>
        <div class="row reg-row">
          <div class="col-sm-5 col-md-5 col-lg-5">
            <label for="inputEmail" class="sr-only">Telefono numeris</label>
            <input type="text" id="inputEmail" class="form-control" placeholder="Telefono numeris" required autofocus>
          </div>
          <div class="col-sm-2 col-md-2 col-lg-2">
            <label for="inputEmail" class="sr-only">Pašto kodas</label>
            <input type="text" id="inputEmail" class="form-control" placeholder="Pašto kodas" required autofocus>
          </div>
          <div class="col-sm-5 col-md-5 col-lg-5">
            <label for="inputEmail" class="sr-only">Pilietybė</label>
            <input type="text" id="inputEmail" class="form-control" placeholder="Pilietybė" required autofocus>
          </div>
        </div>
        <div class="form-control-pad">
          <label for="inputPassword" class="sr-only">Slaptažodis</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Slaptažodis" required>
        </div>
        <div class="form-control-pad">
          <label for="inputRepeatPassword" class="sr-only">Pakartokite slaptažodį</label>
          <input type="password" id="inputRepeatPassword" class="form-control" placeholder="Pakartokite slaptažodį" required>
        </div>
        <button class="btn btn-lg btn-primary btn-block registration-button" type="submit">Registruotis</button>
    </form>
  </div>

</section>
@endsection
