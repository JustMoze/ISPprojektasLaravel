<div class="container">
  <h1 class="com-compl-heading">Atsiliepimai</h1>
  <div class="row">
    @foreach($Atsiliepimai as $atsiliepimas)
      <div class="col-8">
        <div class="card card-white post">
          <div class="post_heading">
            <div class="float-left">
               <img src="http://bootdey.com/img/Content/user_1.jpg" class="avatar" alt="user profile image">
            </div>
            <div class="float-left">
              <div>
                  <a href="#"><b>Ryan Haywood</b></a>
              </div>
              <h6>1 minute ago</h6>
            </div>
          </div>
          <div class="post-description">
            <h4>{{ $atsiliepimas->title }}</h4>
            <p>{{ $atsiliepimas->message }}</p>
          </div>
          <div class="retingo-iconos">
            <h6 id="{{ $atsiliepimas->rating }}" class="ivert" onload="Ivertinimas();">Ivertinimas:

            <i class="fas fa-fire fa ivetinta" id="1one"></i>
            <i class="fas fa-fire fa ivetinta" id="2one"></i>
            <i class="fas fa-fire fa ivetinta" id="3one"></i>
            <i class="fas fa-fire fa ivetinta" id="4one"></i>
            <i class="fas fa-fire fa ivetinta" id="5one"></i>
          </h6>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
