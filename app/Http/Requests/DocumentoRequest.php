<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentoRequest extends FormRequest
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
            'titulo'=>'required',
            'nome_arquivo'=>'required',
            'tipo_id'=>'required',
        ];
    }

    /**
     * Mensagens personalizadas para validações do formulário
     *
     * @return array
     */
    public function messages()
    {
        return [
            'titulo.required'=>'"Título" é um campo obrigatório!',
            'tipo_id.required'=>'"Tipo" de documento é um campo obrigatório!',
            'nome_arquivo.required'=>'"Nome" do arquivo é um campo obrigatório!',
        ];
    }
}
