<?php

namespace flexy\Http\Requests;

use flexy\Http\Requests\Request;

class TransportadoraRequest extends Request
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
            'nome_fantasia' => 'required',
            'razao_social' => 'required',
            'cnpj' => 'required'
        ];
    }
}
