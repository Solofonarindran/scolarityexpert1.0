<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEleveRequest extends FormRequest
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
            "name"=>"required|string",
            "date_naiss"=>"required|date",
            "adress"=>"required"
        ];
    }

    public function messages()
    {
        return
        ["name.string"=>"Ce champ ne contient pas de numérique"];
        
    }
}
