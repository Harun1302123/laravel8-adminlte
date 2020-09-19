<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => 'required|min:3|max:191|string',
            'email' => 'email|required|min:6|unique:users',
            'password' => 'sometimes|required|alpha_num|between:6,20',
            'password_confirmation' => 'required_with:password',
        ];
    }

    public function attributes(){
        return[
            'name' => 'nome',
            'email' => 'e-mail',
            'password' => 'senha',
            'password_confirmation' => 'confirme sua senha'
        ];
    }
}
