<?php

namespace App\Http\Requests;
use  App\Rules\UpperCase;
use Illuminate\Foundation\Http\FormRequest;


class StoreClienteRequest extends FormRequest
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
            
                'nome' => ['required', new UpperCase()],
                'cpf' => 'required',
                'endereco' => 'required',
                'debito' => 'required'    
        ];
    }

    public function messages(){
        return [
            'nome.required' => 'Preencha o campo Nome*',
            'sexo.required' => 'Preencha o campo Sexo*',
            'endereco.required' => 'Preencha o campo Endereço*',
            'debito.required' => 'Preencha o campo Débito*'
        ];
    }





}
