<?php

declare(strict_types=1);

namespace App\Http\Services;

use App\Domain\Customer\Resource\CustomerCollection;
use App\Domain\Customer\Service\CustomerServiceInterface;
use App\Models\Customer;

class CustomerService implements CustomerServiceInterface
{
    public function getList(): CustomerCollection
    {
        $result = Customer::All();

        return new CustomerCollection($result);
    }
}
