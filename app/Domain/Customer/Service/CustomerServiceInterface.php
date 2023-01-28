<?php

declare(strict_types=1);

namespace App\Domain\Customer\Service;

use App\Domain\Customer\Entity\CustomerEntity;
use App\Domain\Customer\Resource\CustomerCollection;
use App\Http\Requests\Customer\CustomerStoreRequest;
use App\Http\Requests\Customer\CustomerUpdateRequest;

interface CustomerServiceInterface
{
    public function getList(): CustomerCollection;

    public function findById(int $id): CustomerEntity;

    public function store(CustomerStoreRequest $request): bool;

    public function update(CustomerUpdateRequest $request): bool;

    public function delete(int $id): bool;
}
