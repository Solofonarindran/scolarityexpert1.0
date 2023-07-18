<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnnee_scolaireRequest extends FormRequest
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
        return 
        [
            'libelle'=>'required|string',
            'nb_mois'=>'required',
            'debut_annee'=>'required'
        ];
    }

    public function messages()
    {
        return 
        [
            'libelle.required'=>'Ce Champ est obligatoire',
            'nb_mois.required'=>'Ce Champ est obligatoire',
            'debut_annee.required'=>'Ce Champ est obligatoire'
        ];
    }
}
