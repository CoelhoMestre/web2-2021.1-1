<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProdutoRequest extends FormRequest
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
                'nome' => 'required',
                'icms' => 'required',
                'ipi' => 'required',
                'frete' => 'required',
                'precofabrica' => 'required',
                'precocompra' => 'required',
                'precovenda' => 'required',
                'lucro' => 'required',
                'desconto' => 'required',
                'quantidade' => 'required'

                   
        ];
    }

    public function messages(){
        return [
                'nome.required' => 'mensagem*',
                'icms.required' => 'mensagem*',
                'ipi.required' => 'mensagem*',
                'frete.required' => 'mensagem*',
                'precofabrica.required' => 'mensagem*',
                'precocompra.required' => 'mensagem*',
                'precovenda.required' => 'mensagem*',
                'lucro.required' => 'mensagem*',
                'desconto.required' => 'mensagem*',
                'quantidade.required' => 'mensagem*'

        ];
    }
}
