<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CollaborateurCreateRequest extends FormRequest
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
          // '"Collaborateur_TCa"' => 'required|max:255|unique:T_Collaborateurs',
        // '"Date_In_TCa"' => 'required|unique:T_Collaborateurs',
        // '"Date_Out_TCa"' => 'required|unique:T_Collaborateurs',
        // '"Acces_TCa"' => 'required|max:11|unique:T_Collaborateurs',
        // '"Responsable_TCa"' => 'required|unique:T_Collaborateurs',
        // '"TR_TCa"' => 'required|unique:T_Collaborateurs',
        ];
    }
}
