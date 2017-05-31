<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CollaborateurUpdateRequest extends FormRequest
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
        $Id_TCa = $this->collaborateur;
        return [
          '"Collaborateur_TCa"' => 'required|unique:T_Collaborateurs,"Collaborateur_TCa",' . $Id_TCa,
          '"Date_In_TCa"' => 'required|unique:T_Collaborateurs,"Date_In_TCa",' . $Id_TCa,
          '"Date_Out_TCa"' => 'required|unique:T_Collaborateurs,"Date_Out_TCa",' . $Id_TCa,
          '"Acces_TCa"' => 'required|unique:T_Collaborateurs,"Acces_TCa",' . $Id_TCa,
          '"Responsable_TCa"' => 'required|unique:T_Collaborateurs,"Responsable_TCa"' . $Id_TCa,
          '"TR_TCa"' => 'required|unique:T_Collaborateurs,"TR_TCa"' . $Id_TCa,
        ];
    }
}
