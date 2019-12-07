<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
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
            'username' => 'required',
            'cardNumber' => 'required',
            'expireDate' => 'required',
            'cvv' => 'required'
        ];
    }
    public function messages(){
      return[
        'username.required' => 'Kortelės vardas yra būtinas',
        'cardNumber.required' => 'Koretelės numeris yra privalomas',
        'expireDate.required' => 'Galiojimo data yra būtina',
        'cvv.required' => 'CVV kodas yra būtinas',
      ];
    }
  }
