<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email' => ['required'],
            'password' => ['required', 'min:6'],
        ];
    }

    public function messages()
    {
      return [
        'name.required' => 'Por favor escribe un nombre',
        'name.min' => 'El nombre no puede tener menos de 10 caractéres',
        'email.required' => 'Por favor escribe un correo electrónico',
        /*

        'password.required' => 'Por favor escribe una contraseña',
        'password.min' => 'La contraseña no puede tener menos de 6 caractéres',*/
      ];
    }
}
