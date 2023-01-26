<?php

declare(strict_types=1);

namespace App\Http\Services;

use App\Domain\Customer\Repository\CustomerRepositoryInterface;
use App\Domain\Customer\Resource\CustomerCollection;
use App\Domain\Customer\Service\CustomerServiceInterface;

class CustomerService implements CustomerServiceInterface
{
    private CustomerRepositoryInterface $repository;

    public function __construct(
        CustomerRepositoryInterface $repository
    ) {
        $this->repository = $repository;
    }

    public function getList(): CustomerCollection
    {
        $result = $this->repository->getList();

        return new CustomerCollection($result);
    }
}
