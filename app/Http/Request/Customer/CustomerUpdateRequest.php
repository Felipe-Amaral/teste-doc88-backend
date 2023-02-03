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
        return [
            'name' => 'string|min:3|max:255',
            'email' => 'email|unique:customers,email|max:255',
            'phone' => 'string|max:255',
            'bornDate' => 'date|before:today',
            'adress' => 'string|max:255',
            'adressComplement' => 'string|max:255',
            'district' => 'string|max:255',
            'cep' => 'string|digits:8',
        ];
    }
}
