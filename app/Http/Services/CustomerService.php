<?php

declare(strict_types=1);

namespace App\Http\Services;

use App\Domain\Customer\Entity\CustomerEntity;
use App\Domain\Customer\Resource\CustomerCollection;
use App\Domain\Customer\Service\CustomerServiceInterface;
use App\Http\Request\Customer\CustomerStoreRequest;
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

        return new CustomerEntity($result->toArray());
    }

    public function store(CustomerStoreRequest $request): bool
    {
        if (Customer::create($request->toArray())) {
            return true;
        }

        return false;
    }

    public function update(): bool
    {
        exit('1');
        if (Customer::update($request->toArray())) {
            return true;
        }

        return false;
    }

    public function delete(int $id): bool
    {
        return true;
    }
}
