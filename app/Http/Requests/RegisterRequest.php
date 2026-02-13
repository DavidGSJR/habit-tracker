<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:60|confirmed',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O campo de nome é obrigatório',
            'name.max' => 'O nome não deve exceder 255 caracteres',
            'name.string' => 'O nome deve ser um texto válido',
            'email.required' => 'O campo de email é obrigatório',
            'email.email' => 'O campo de email deve ser um endereço de email válido',
            'email.unique' => 'O email já está em uso',
            'password.required' => 'O campo de senha é obrigatório',
            'password.min' => 'A senha deve ter no mínimo 6 caracteres',
            'password.max' => 'A senha não deve exceder 60 caracteres',
            'password.confirmed' => 'As senhas não coincidem',
        ];
    }
}
