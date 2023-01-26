<?php

declare(strict_types=1);

namespace App\Domain\Customer\Resource;

use App\Domain\Customer\Entity\CustomerEntity;
use Illuminate\Support\Collection;

class CustomerCollection extends Collection
{
    public function getEntityName(): string
    {
        return CustomerEntity::class;
    }

    public function toArray(): array
    {
        // code...
    }
}
