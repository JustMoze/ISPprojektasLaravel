@extends('layouts.app')
@section('content')
<div class="container py-5">
  <!-- For demo purpose -->
  <div class="row mb-4">
    <div class="col-lg-8 mx-auto text-center">
      <h1 class="display-4">@yield('UserName')</h1>
      <p class="lead mb-0">@yield('roomInfo')</p>
    </div>
  </div>
  <!-- End -->


  <div class="row paymentPage">
    <div class="col-lg-7 mx-auto">
      <div class="bg-white rounded-lg shadow-sm p-5">
        <h4 class="h4-payment">Sveiki atvykę į paskutinį rezervacijos etapą, {{$user->name}}!</h4>
        <!-- Credit card form tabs -->
        <ul role="tablist" class="nav bg-light nav-pills rounded-pill nav-fill mb-3">
          <li class="nav-item">
            <a data-toggle="pill" href="#nav-tab-card" class="nav-link active rounded-pill">
              <i class="fa fa-credit-card"></i>
              Kreditinė kortelė
            </a>
          </li>
          <li class="nav-item"></li>
          <li class="nav-item"></li>
        </ul>
        <!-- End -->


        <!-- Credit card form content -->
        <div class="tab-content">

          <!-- credit card info-->
          <div id="nav-tab-card" class="tab-pane fade show active">
            <form method="post" action="{{route('payment-update', $room_id, $rez_id, $user_id)}}">
              @csrf
              {{method_field('PUT')}}
              <div class="form-group">
                <label for="username">Kreditinės kortelės vardas</label>
                <input type="text" name="username" placeholder="@yield('placeholder1')" required class="form-control">
              </div>
              <div class="form-group">
                <label for="cardNumber">Kreditinės kortelės numeris</label>
                <div class="input-group">
                  <input type="text" name="cardNumber" placeholder="Your card number" class="form-control" required>
                  <div class="input-group-append">
                    <span class="input-group-text text-muted">
                      <i class="fa fa-cc-visa mx-1"></i>
                      <i class="fa fa-cc-amex mx-1"></i>
                      <i class="fa fa-cc-mastercard mx-1"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8">
                  <div class="form-group">
                    <label><span class="hidden-xs">Galiojimo pabaiga</span></label>
                    <div class="input-group">
                      <input type="date" name="expireDate" min="2019-12-11">
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group mb-4">
                    <label data-toggle="tooltip" name="cvv" title="Three-digits code on the back of your card">CVV kodas
                      <i class="fa fa-question-circle"></i>
                    </label>
                    <input type="text" required class="form-control">
                  </div>
                </div>



              </div>
              <button type="button" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm"> Confirm </button>
            </form>
          </div>
          <!-- End -->

        </div>
      </div>
    </div>
  </div>
@endsection
