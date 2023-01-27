<?php

declare(strict_types=1);

namespace App\Domain\Customer\Service;

use App\Domain\Customer\Entity\CustomerEntity;
use App\Domain\Customer\Resource\CustomerCollection;

interface CustomerServiceInterface
{
    public function getList(): CustomerCollection;

    public function findById(): CustomerEntity;

    public function create(): bool;

    public function update(): bool;

    public function delete(): bool;
}
