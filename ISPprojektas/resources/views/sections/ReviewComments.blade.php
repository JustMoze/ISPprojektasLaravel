<?php session_start();
$roomid =  $_SESSION["roomID"]

?>
@php
  use App\User;
@endphp
<div class="container">
  <h1 class="com-compl-heading">Atsiliepimai</h1>
  <div class="row">
    @foreach($Atsiliepimai as $atsiliepimas)
    @php
      $id = $atsiliepimas->user_id;
      $user = User::find($id);
    @endphp
      @if($atsiliepimas->room_id == @$roomid)
      <div class="col-8">
        <div class="card card-white post">
          <div class="post_heading">
            <div class="float-left">
               <img src="http://bootdey.com/img/Content/user_1.jpg" class="avatar" alt="user profile image">
            </div>
            <div class="float-left">
              <div>
                  <a href="#"><b>{{$user->name}}</b></a>
              </div>
              <h6>1 minute ago</h6>
            </div>
          </div>
          <div class="post-description">
            <h4>{{ $atsiliepimas->title }}</h4>
            <p>{{ $atsiliepimas->message }}</p>
          </div>
          <div class="retingo-iconos">
            <h6 class="ivert">
              Ivertinimas: <strong style="color: #ed6663">5/{{ $atsiliepimas->rating }} <i class="fas fa-fire"></i></strong>
          </h6>
          </div>
        </div>
      </div>
      <script src="{{asset('js\app.js')}}" charset="utf-8"></script>
      @endif
    @endforeach
  </div>
</div>
