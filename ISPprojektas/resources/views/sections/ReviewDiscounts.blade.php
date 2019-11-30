<div class="container">
  <h1 class="com-compl-heading">Nuolaidos</h1>
  <div class="row">
    <table class="table table-bordered">
      <tr>
        <th>Nuolaidos Dydis</th>
        <th>Nuolaidos Tipas</th>
        <th></th>
        <th></th>
      </tr>
    @foreach($Nuolaida as $Nuolaida)
    <tr>
      <td>{{ $Nuolaida->nuolaidos_dydis }}</td>
      <?php
      if($Nuolaida->nuolaidos_tipas == 1){
        echo "<td>Eurai</td>";
      }
      else{
        echo "<td>Procentai</td>";
      }
      ?>
    <td><a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{URL::to('/Discount/'.$Nuolaida->id_Nuolaida) }}"><i class="fa fa-trash"></i></a></td>
    <td><a class="btn btn-primary" href="{{URL::to('/UpdateDiscount/'.$Nuolaida->id_Nuolaida) }}">Update</a></td>
    </tr>
    @endforeach
    </table>
  </div>
    <a class="btn btn-primary" href="/AddDiscount"> Prideti </a>
</div>
