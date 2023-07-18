<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreChargerRequest extends FormRequest
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
            'matiere_id'=>'required',
            'classe_id'=>'required',
            'professeur_id'=>'required',
            'annee_scolaire_id'=>'required',
            'coefficient'=>'required',
            'heurechargerparmois'=>'required',
            'coutparheure'=>'required'
        ];
    }
}
