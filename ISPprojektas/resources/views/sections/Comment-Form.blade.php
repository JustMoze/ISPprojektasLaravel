<div class="Comment-sec container">
  <h1>Įvertinkite kambarį!</h1>
  <div class="row">
    <div class="col-lg-6">
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <form method="post" action="{{ route('Comment-submit-form') }}">
        @csrf

        <div class="form-group">
          <label for="rating">Vertinimas nuo 1 iki 5</label>
          <div class="vertinimo-iconos">
            <i class="fas fa-fire fa-3x checked" id="1one"></i>
            <i class="fas fa-fire fa-3x checked" id="2one"></i>
            <i class="fas fa-fire fa-3x checked" id="3one"></i>
            <i class="fas fa-fire fa-3x checked" id="4one"></i>
            <i class="fas fa-fire fa-3x checked" id="5one"></i>
          </div>
          <input type="text" class="form-control vertinimo-laukas" name="rating" id="rating"  readonly="readonly">
        </div>
        <hr>
        <h2>Palikite atiliepimą(nebūtina)</h2>
        <div class="form-group">
          <label for="title" >Title</label>
          <input type="text" class="form-control" name="title" id="title"  placeholder="Enter title">
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control" id="message" name="message" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
<script src="{{asset('js/app.js')}}" charset="utf-8"></script>
