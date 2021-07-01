<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class PostsStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Auth::check()) return true;
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|unique:posts',
            'subtitle' => 'required|string',
            'text' => 'required',
            'img' => 'required',
            'movie' => 'nullable|string'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'O título da matéria é obrigatório',
            'title.string' => 'O título deve ser um texto',
            'title.unique' => 'Este título já existe',
            'subtitle.required' => 'O subtítulo da matéria é obrigatório',
            'subtitle.string' => 'O subtítulo deve ser um texto',
            'text.required' => 'O texto da matéria é obrigatório',
            'img.required' => 'Envie uma imagem para matéria e aguarde o carregamento total',
            'movie.string' => 'Link inválido'
        ];
    }
}
