<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name' => 'required|between:3,191|string|unique:users,name,' . $this->user->id,
            'email' => 'email|string|max:191|required|unique:users,email,' . $this->user->id,
            'password' => 'nullable|string|between:8,20|confirmed',
            'password_confirmation' => 'required_with:password',
        ];
    }

    public function attributes(){
        return[
            'name' => 'nome',
            'email' => 'e-mail',
            'password' => 'senha',
            'password_confirmation' => 'confirmação de senha'
        ];
    }
}
