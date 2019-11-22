<div class="Comment-sec container">
  <h1>Palikite Nusiskundimą</h1>
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
      <form method="post" action="{{ route('Complaint-submit-form') }}">
        @csrf
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
