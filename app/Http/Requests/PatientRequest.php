<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
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
            'ci' => ['required', 'min:7', 'max:10'],
            'email' => ['required', 'email'],
            'local_phone' => ['required', 'numeric', 'digits:11'],
            'personal_phone' => ['required', 'numeric', 'digits:11'],
            'address' => ['required', 'max:160'],
        ];
    }
}
