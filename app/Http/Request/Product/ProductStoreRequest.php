<?php

declare(strict_types=1);

namespace App\Http\Request\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'string',
            'price' => 'string',
            'photo' => 'string',
        ];
    }
}
