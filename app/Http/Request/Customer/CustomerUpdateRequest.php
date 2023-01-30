<?php

declare(strict_types=1);

namespace App\Http\Request\Customer;

use Illuminate\Foundation\Http\FormRequest;

class CustomerUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $rules = [
            'name' => 'string',
            'email' => 'email',
            'phone' => 'string',
            'bornDate' => 'string',
            'adress' => 'string',
            'adressComplement' => 'string',
            'district' => 'string',
            'cep' => 'string',
        ];

        return $rules;
    }
}
