<?php

declare(strict_types=1);

namespace App\Http\Services;

use App\Domain\Customer\Entity\CustomerEntity;
use App\Domain\Customer\Resource\CustomerCollection;
use App\Domain\Customer\Service\CustomerServiceInterface;
use App\Http\Requests\Customer\CustomerStoreRequest;
use App\Http\Requests\Customer\CustomerUpdateRequest;
use App\Models\Customer;

class CustomerService implements CustomerServiceInterface
{
    public function getList(): CustomerCollection
    {
        $result = Customer::All();

        return new CustomerCollection($result);
    }

    public function findById(int $id): CustomerEntity
    {
        $result = Customer::find($id);

        return new CustomerEntity($result);
    }

    public function store(CustomerStoreRequest $request): bool
    {
        return true;
    }

    public function update(CustomerUpdateRequest $request): bool
    {
        return true;
    }

    public function delete(int $id): bool
    {
        return true;
    }
}
