<?php

declare(strict_types=1);

namespace App\Http\Services;

use App\Domain\Customer\Entity\CustomerEntity;
use App\Domain\Customer\Resource\CustomerCollection;
use App\Domain\Customer\Service\CustomerServiceInterface;
use App\Http\Request\Customer\CustomerStoreRequest;
use App\Http\Request\Customer\CustomerUpdateRequest;
use App\Models\Customer;

class CustomerService implements CustomerServiceInterface
{
    public function create(CustomerStoreRequest $request): bool
    {
        if (Customer::create($request->all())) {
            return true;
        }

        return false;
    }

    public function read(int $id): CustomerEntity
    {
        $result = Customer::find($id);

        return new CustomerEntity($result->toArray());
    }

    public function update(CustomerUpdateRequest $request, int $id): bool
    {
        if (Customer::where('id', $id)->update($request->all())) {
            return true;
        }

        return false;
    }

    public function delete(int $id): bool
    {
        if (Customer::where('id', $id)->delete()) {
            return true;
        }

        return false;
    }

    public function list(): CustomerCollection
    {
        $result = Customer::All();

        return new CustomerCollection($result);
    }
}
