<?php

declare(strict_types=1);

namespace App\Http\Request\Customer;

use Illuminate\Foundation\Http\FormRequest;

class CustomerStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $rules = [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'bornDate' => 'required|string',
            'adress' => 'required|string',
            'adressComplement' => 'required|string',
            'district' => 'required|string',
            'cep' => 'required|string',
        ];

        return $rules;
    }
}
