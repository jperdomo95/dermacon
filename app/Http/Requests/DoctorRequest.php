<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
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
          'name' => ['required', 'min:10'],
          'ci' => ['required', 'min:7'],
          'email' => ['required', 'email'],
          'description' => ['required', 'max:160'],
        ];
    }

    /*public function messages()
    {
      return [
        'name.required' => 'Por favor introduzca un nombre',
        'name.min' => 'El nombre no puede tener menos de 10 caractéres',
        'email.required' => 'Por favor introduzca un correo electrónico',
        'email.email' => 'Por favor introduzca un formato de correo válido',
        'description.required' => 'El nombre no puede tener menos de 10 caractéres',
      ];
    }*/
}
