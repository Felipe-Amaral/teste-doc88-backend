<?php

declare(strict_types=1);

namespace App\Domain\Customer\Repository;

interface CustomerRepositoryInterface
{
    public function getList(): array;
}
