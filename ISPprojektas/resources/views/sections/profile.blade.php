@php
  use Illuminate\Support\Facades\Auth;
  use App\Models\Rezervacija;

  $user = Auth::user();
  $paymentCards = $user->payments;
  $paymentCard = $paymentCards[0];
@endphp
<div class="container">
  <div class="profile-font skill-row row">
    <!-- images/Room1.jpg images/avatar.png-->
    <div class="col-lg-3">
      <h6>Profile picture</h4>
       <img class='code-img' src='images/avatar.png' width="150px" height="150px" >
      <a href="{{route('ProfileEdit', Auth::user()->getId())}}"  type="button" class="btn btn-warning btn-sm" name="button"><i class="fas fa-edit"> Redaguoti</i></a>
    </div>
    <div class="col-lg-9">
      <h3>Vardas</h3>
      <h3>Pavarde</h3>
      <p>elektoninis@pastas.com</p>
      <form action="{{route('deleteMySelf', Auth::user()->getId())}}" method="post">
            @csrf
            {{method_field('DELETE')}}
            <button type="submit" class="btn btn-danger" name="button">Ištrinti Paskyrą</button>
        </form>
        <form method="POST" action="{{route('payments.update', $paymentCard->id)}}">
          @csrf
          {{ method_field('PUT') }}
          <label for="">Redaguoti sąskaitos numerį: </label>
          <input type="text" value="{{$paymentCard->cardCode}}" name="cardCode">
          <button type="submit" class="btn btn-primary" name="button">Patvirtinti</button>
      </form>
    </div>
  </div>
</div>
<hr>
