<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContratRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'libelle'=>'required|string',
            'dateremboursement'=>'required',
            'amount'=>'required|numeric'
        ];
    }

    public function messages()
    {
        return 
        [
            "amount.numeric"=>"Ce champ doit contenir un nombre"
        ];
    }
}
