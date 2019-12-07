@extends('layouts.app')
  @csrf
@section('content')
<!-- <label for="surname">Įveskite pavardę:⠀</label>
<input type="string" placeholder="Pavardė" name="surname">
<label for="pass">Įveskite naują slaptažodį:⠀</label>
<input type="password" name="pass">
<label for="phonenumber">Įveskite naują telefono numerį:⠀</label>
<input type="string" placeholder="+37062542929" name="phonenumber">
<label for="additionalInfo">Įveskite aprašymą:⠀</label>
<input type="string" placeholder="Apibūdinimas" name="additionalInfo">
<label for="adress">Įveskite adresą:⠀</label>
<input type="string" placeholder="Adresas" name="adress">
<label for="postCode">Įveskite pašto kodą:⠀</label>
<input type="number" step="1" placeholder="88451" name="postCode"> -->
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Redaguoti Profilį</div>

        <div class="card-body">
          <form method="POST" action="{{route('updateUser',Auth::user()->getId())}}">
            @csrf
            {{ method_field('PUT') }}
            <div class="form-group row">
              <label for="surname" class="col-md-4 col-form-label text-md-right">Pavardė</label>

              <div class="col-md-6">
                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" placeholder="Pavardė" required autocomplete="name" autofocus>

                @error('surname')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="pass" class="col-md-4 col-form-label text-md-right">Slaptažodis</label>

              <div class="col-md-6">
                <input id="pass" type="password" class="form-control @error('pass') is-invalid @enderror" name="pass" required autocomplete="pass">

                @error('pass')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="phoneNumber" class="col-md-4 col-form-label text-md-right">Telefono numeris</label>

              <div class="col-md-6">
                <input id="phoneNumber" type="text" placeholder="+37065812592" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" required autocomplete="phoneNumber">

                @error('phoneNumber')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="additionalInfo" class="col-md-4 col-form-label text-md-right">Papildoma informacija</label>
              <div class="col-md-6">
                <input id="additionalInfo" type="text" placeholder="Aprašymas" class="form-control @error('phoneNumber') is-invalid @enderror" name="additionalInfo" required autocomplete="additionalInfo">

                @error('additionalInfo')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="address" class="col-md-4 col-form-label text-md-right">Adresas</label>
              <div class="col-md-6">
                <input id="address" type="text" placeholder="Jūsų namų adresas" class="form-control @error('phoneNumber') is-invalid @enderror" name="address" required autocomplete="address">

                @error('address')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="postCode" class="col-md-4 col-form-label text-md-right">Pašto kodas</label>
              <div class="col-md-6">
                <input id="postCode" type="number" step="1" placeholder="54614" class="form-control @error('postCode') is-invalid @enderror" name="postCode" required autocomplete="postCode">

                @error('postCode')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="nationality" class="col-md-4 col-form-label text-md-right">Pilietybė</label>
              <div class="col-md-6">
                <input id="nationality" type="text" placeholder="Lietuvis" class="form-control @error('nationality') is-invalid @enderror" name="nationality" required autocomplete="nationality">

                @error('nationality')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="birthDate" class="col-md-4 col-form-label text-md-right">Gimimo Data</label>
              <div class="col-md-6">
                <input id="birthDate" type="date" max="2010-12-31" class="form-control @error('birthDate') is-invalid @enderror" name="birthDate" required autocomplete="birthDate">

                @error('birthDate')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row gender-input">
              <label for="gender" class="gender-label">Pasirinkite lytį</label>
              <div>
                <label class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" value="option1">
                  <span class="form-check-label"> Vyras </span>
                </label>
                <label class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" value="option2">
                  <span class="form-check-label"> Moteris</span>
                </label>
                <label class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" value="option3">
                  <span class="form-check-label"> Kita</span>
                </label>
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-success">
                  Atnaujinti
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection
@section('lowFooter')
  footer-main
@endsection
