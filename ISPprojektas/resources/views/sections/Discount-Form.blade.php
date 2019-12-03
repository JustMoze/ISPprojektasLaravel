<div class="Comment-sec container">
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
      <form method="post" action="{{ action('DiscountController@submit') }}">
        @csrf
        <div class="form-group">
          <label for="title" >Nuolaidos Dydis</label>
          <input type="text" class="form-control" name="nuolaidos_dydis" id="nuolaidos_dydis"  placeholder="Enter Discount amount">
        </div>
        <div class="form-group">
          <label for="message">Discount Type</label>
          <select class="form-control" id="nuolaidos_tipas" name="nuolaidos_tipas">
            <option value="1">Eurai</option>
            <option value="2">Procentai</option>
          </select>

        </div>
        <button  type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
<script src="{{asset('js/app.js')}}" charset="utf-8"></script>
