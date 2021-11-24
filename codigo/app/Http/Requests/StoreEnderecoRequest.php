<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEnderecoRequest extends FormRequest
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
                'logradouro' => 'required',
                'bairro' => 'required',
                'cidade' => 'required',
                'uf' => 'required|min:2|max:2',
                'idcliente' => 'required'
                   
        ];
    }

    public function messages(){
        return [
            'logradouro.required' => 'Preencha o campo Logradouro*',
            'bairro.required' => 'Preencha o campo Bairro*',
            'cidade.required' => 'Preencha o campo Cidade*',
            'uf.required' => 'Preencha o campo UF*',
            'uf.min' => "Campo UF deve ter no mínimo :min letras*",
            'uf.max' => "Campo UF deve ter no máximo :min letras*",
            'idcliente.required' => 'Preencha o campo ID Cliente*'
        ];
    }
}