<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UsersPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(! Auth::check())
            return false;
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
            'name' => 'required|string',
            'document' => 'required|string|unique:users',
            'phone' => 'required|string',
            'cep' => 'required|string',
            'street' => 'required|string',
            'number' =>'required',
            'district' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'email'=> 'required|email|confirmed|unique:users',
            'password' => 'required|confirmed'
        ];
    }

    public function messages()
    {
        return [
            'name.required' =>  'O nome do usuário é obrigatório',
            'name.string' =>  'O formato do nome é inválid',
            'document.required' =>  'O CPF do usuário é obrigatório',
            'document.string' =>  'O formato do cpf é invalido',
            'document.unique' => 'Este CPF já está cadastrado em nossa base de dados',
            'street.required' => 'O nome da rua é obrigatório',
            'street.string' => 'Este campo deve ser um texto',
            'number.reuired' => 'Este camppo é obrigatório',
            'district.required' => 'O nome do bairro é obrigatório',
            'district.string' => 'Este campo deve ser um texto',
            'city.required' => 'O nome do campo é obrigatório',
            'city.string' => 'Esse campo deve ser um texto',
            'state.required' => 'o Estado é um campo é obrigatório',
            'state.string' => 'Este campo deve ser um texto',
            'email.required' => 'O email de acesso é obrigatório',
            'email.email' => 'Este campo deve ser ume mail',
            'email.confirmed' => 'Os email não são iguais',
            'email.unique' => 'Este email já está cadastrado',
            'password.required' => 'A senha de  de acesso é obrigatório',
            'password.confirmed' => 'As senhas não são iguais',
        ];
    }
}
