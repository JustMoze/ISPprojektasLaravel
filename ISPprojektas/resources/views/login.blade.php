@extends('layouts.pageStructure')

@section('topic')
  <p class="topic" >Prisijungimas</p>
@endsection
@section('content')
<form  method="post" action="Login/Submit">
  @csrf
  <div class="row first-row">
    <div class="col-sm-3 col-md-3 col-lg-3"></div>
    <div class="col-sm-6 col-md-6 col-lg-6">
      <form>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3">Prisijungimo vardas: </span>
          </div>
          <input type="text" class="form-control" placeholder="@Username" aria-describedby="basic-addon3">
        </div>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-3 col-md-3 col-lg-3"></div>
    <div class="col-sm-6 col-md-6 col-lg-6">
      <form>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3">Slaptažodis: </span>
          </div>
          <input type="password" class="form-control" placeholder="@Slaptažodis" aria-describedby="basic-addon3">
        </div>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-3 col-md-3 col-lg-3"></div>
    <div class="col-sm-6 col-md-6 col-lg-6">
      <button type="button" class="btn btn-outline-success reg-button">Prisijungti</button>
    </div>
  </div>
  <br style="margin-top: 25%">
</form>
@endsection
