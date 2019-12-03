<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DiscountRequest;
use App\Models\Nuolaida;
use DB;

class DiscountController extends Controller
{
    public function submit(DiscountRequest $request){
      $nuolaida = new Nuolaida();
      $nuolaida->nuolaidos_dydis = $request->input('nuolaidos_dydis');
      $nuolaida->nuolaidos_tipas = $request->input('nuolaidos_tipas');
      $nuolaida->save();

      return redirect()->route('Discounts');
    }

    public function getNuolaidas(){
      $nuolaidos = Nuolaida::all();

      return view('Discounts', ['Nuolaida' => $nuolaidos]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Nuolaida::where('id_Nuolaida', $id)->delete();
      return redirect()->route('Discounts');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
     {
       $nuolaida = Nuolaida::where('id_Nuolaida', $id)->first();
        return view('Discount_Update')->with(['nuolaida'=>$nuolaida]);
     }


     public function update(DiscountRequest $request, $id)
    {
      $a1 = $request->input('nuolaidos_dydis');
      $a2 = $request->input('nuolaidos_tipas');
      DB::update("UPDATE `nuolaidas` SET `nuolaidos_dydis`= '$a1' ,`nuolaidos_tipas`= '$a2' WHERE `id_Nuolaida`= '$id'");

     return redirect()->route('Discounts');
    }



}
