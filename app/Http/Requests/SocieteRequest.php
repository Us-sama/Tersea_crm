<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SocieteRequest extends FormRequest
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
            'societe_nom'=>'required',
            'societe_adresse'=>'required',
            'societe_tel'=>'required',
            'societe_email'=>'required',
        ];
    }
}
