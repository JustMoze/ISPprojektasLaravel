<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiscountRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nuolaidos_dydis' => 'required',
            'nuolaidos_tipas' => 'required'
        ];
    }
    public function messages(){
      return[
        'nuolaidos_dydis.required' => 'Nuolaidos dydis yra privalomas',
        'nuolaidos_tipas.required' => 'Nuolaidos tipas yra privalomas'
      ];
    }
  }
