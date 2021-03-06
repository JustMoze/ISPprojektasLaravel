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
      <form action = "/update/<?php echo $nuolaida->id_Nuolaida ?>" method = "post">
        @csrf
        <div class="form-group">
          <label for="title" >Nuolaidos Dydis</label>
          <input value = {{ $nuolaida->nuolaidos_dydis }}  type="text" class="form-control" name="nuolaidos_dydis" id="nuolaidos_dydis"  placeholder="Enter Discount amount">
        </div>
        <div class="form-group">
          <label for="message">Nuolaidos Tipas</label>
          <select class="form-control" id="nuolaidos_tipas" name="nuolaidos_tipas">
            <?php
            $aa = $nuolaida->nuolaidos_tipas;
            echo $aa;
            if($nuolaida->nuolaidos_tipas == 1){
              echo "<option value='1'>Eurai</option>";
            }
            else{
              echo "<option value='2'>Procentai</option>";
            }
            ?>
            <option value="1">Eurai</option>
            <option value="2">Procentai</option>
          </select>
        </div>
        <div class="form-group">
          <label for="title" >Nuolaidos Kodas</label>
          <input value = {{ $nuolaida->kodas }}  type="text" class="form-control" name="kodas" id="kodas"  placeholder="Enter Code for Discount">
        </div>
        <button  name="submit" type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
<script src="{{asset('js/app.js')}}" charset="utf-8"></script>
