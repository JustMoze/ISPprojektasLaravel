<?php session_start();
$roomid =  $_SESSION["roomID"]

?>
@php
  use App\User;
@endphp
<div class="container">
  <h1 class="com-compl-heading">Nusiskundimai</h1>
  <div class="row">

    @foreach($Nusiskundimai as $nusiskundimas)
    @php
      $id = $nusiskundimas->user_id;
      $user = User::find($id);
    @endphp
      @if($nusiskundimas->room_id == @$roomid)
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
            <h4>{{ $nusiskundimas->title }}</h4>
            <p>{{ $nusiskundimas->message }}</p>
          </div>
        </div>
      </div>
      @endif
    @endforeach

  </div>
</div>
