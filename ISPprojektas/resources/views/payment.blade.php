@extends('layouts.app')
@section('bodyColor')
  body-Payment
@endsection
@section('content')
@php
  use App\Models\Rezervacija;
  use App\User;

  $creditCards = $user->payments;
  $creditCard = $creditCards[0];
@endphp
<div class="container py-5">
  <!-- For demo purpose -->
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
            <form method="post" class="paymentForm" action="{{route('payment-update')}}">
              @csrf
              {{ method_field('GET') }}
              <input type="hidden" name="userID" value="{{$user_id}}">
              <input type="hidden" name="roomID" value="{{$room_id}}">
              <input type="hidden" name="dateTo" value="{{$dateTo}}">
              <input type="hidden" name="dateFrom" value="{{$dateFrom}}">
              <div class="form-group">
                <label for="username">Kreditinės kortelės vardas</label>
                <input type="text" name="username" placeholder="Kortelės vardas" required class="form-control">
              </div>
              <div class="form-group">
                <label for="cardNumber">Kreditinės kortelės numeris</label>
                <div class="input-group">
                  <input type="text" name="cardNumber" value="{{$creditCard->cardCode}}" placeholder="Your card number" class="form-control" required>
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
                    <input type="number" name="cvv" required class="form-control">
                  </div>
                </div>
              </div>
              <button type="submit" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm"> Confirm </button>
            </form>
            <script>
              $(".paymentForm").on("submit", function(){
                return confirm("Ar tikrai norite rezervuoti nurodytą kambarį");
              });
            </script>
          </div>
          <!-- End -->

        </div>
      </div>
    </div>
  </div>
  </div>
@endsection
@section('lowFooter')
  footer-main
@endsection
