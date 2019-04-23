<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearUserPost extends FormRequest
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
                'name'          => 'required',
                'email'         => 'required|email|unique:users,email',
                'password'      =>'required|min:6'
        ];
    }
    public function messages()
{
    return [
        'name.required'     => 'El campo Nombre es Obligatorio',
                'email.required'    => 'El campo Email es Obligatorio',
                'password.required' => 'El password debe contener mínimo de 6 caracteres',
    ];
}
}
