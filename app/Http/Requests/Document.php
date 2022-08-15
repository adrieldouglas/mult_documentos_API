<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Document extends FormRequest
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
    public function rules(){
     $rules = [
        'user_id' => 'required',
     ];

     if (request()->id) {
        $rules['document_cpf'] = 'required';
        $rules['document_rg'] = 'required';
        $rules['document_cnh'] = 'required';
        $rules['document_cnpj'] = 'required';
        $rules['voter_registration'] = 'required';
        $rules['zipcode'] = 'required';
    } else {
        $rules['document_cpf'] = 'required|min:14|unique:documents';
        $rules['document_rg'] = 'required|min:12|unique:documents';
        $rules['document_cnh'] = 'required|min:11|unique:documents';
        $rules['document_cnpj'] = 'required|min:18|unique:documents';
        $rules['voter_registration'] = 'required|min:12|unique:documents';
        $rules['zipcode'] = 'required|min:9|unique:documents';
    }

    return $rules;
}
}
