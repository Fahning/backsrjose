<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name'      => 'required',
            'cpf'       => 'required | cpf | unique:clients',
            'email'     => 'required | email',
            'phone'     => 'required | celular_com_ddd'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'         => 'Campo nome é obrigatório',
            'cpf.required'          => 'Campo CPF é obrigatório',
            'cpf.cpf'               => 'Campo CPF precisa ser válido',
            'cpf.unique'            => 'Campo CPF já cadastrado.',
            'email.required'        => 'Campo Email é obrigatório',
            'email.email'           => 'Campo Email precisa ser válido',
            'phone.required'        => 'Campo Telefone é obrigatório',
            'phone.celular_com_ddd' => 'Campo Telefone ser válido.'
        ];
    }
}
