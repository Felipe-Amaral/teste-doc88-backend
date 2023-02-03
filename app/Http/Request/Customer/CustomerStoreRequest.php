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
        return [
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email|unique:customers,email|max:255',
            'phone' => 'required|string|max:255',
            'bornDate' => 'required|date|before:today',
            'adress' => 'required|string|max:255',
            'adressComplement' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'cep' => 'required|string|digits:8',
        ];
    }
}
