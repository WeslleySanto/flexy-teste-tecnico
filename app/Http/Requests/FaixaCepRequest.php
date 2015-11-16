<?php

namespace flexy\Http\Requests;

use flexy\Http\Requests\Request;

class FaixaCepRequest extends Request
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
            '_token' => 'required',
            'faixa_cep_ini' => 'required',
            'faixa_cep_fim' => 'required',
            'localidade_faixa_cep' => 'required'
        ];
    }
}
