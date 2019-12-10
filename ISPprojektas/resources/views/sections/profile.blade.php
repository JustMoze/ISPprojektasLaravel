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
    </div>
  </div>
</div>
<hr>
