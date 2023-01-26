<?php

declare(strict_types=1);

namespace App\Models\Repository\Customer;

use App\Domain\Customer\Repository\CustomerRepositoryInterface;

class CustomerRepository implements CustomerRepositoryInterface
{
    private $fakeData = [
        'name' => 'felipe',
        'email' => 'felipe.machado.amaral@gmail.com',
        'phone' => '11971020938',
        'bornDate' => '1990-01-19',
        'adress' => 'rua euclides pacheco',
        'adressComplement' => '1522',
        'district' => 'tatuapé',
        'cep' => '03321001',
        'createdAt' => '2023-01-26',
    ];

    public function getList(): array
    {
        return $this->fakeData;
    }
}
