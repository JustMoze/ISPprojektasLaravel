<div class="Comment-sec container">
  <div class="row">
    <div class="col-lg-6">
      <form method="post" action="{{ route('Comment-submit-form') }}">
        @csrf
        <div class="">
          <i class="fas fa-fire fa-3x"></i>
          <i class="fas fa-fire fa-3x"></i>
          <i class="fas fa-fire fa-3x"></i>
          <i class="fas fa-fire fa-3x"></i>
          <i class="fas fa-fire fa-3x"></i>
        </div>
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
