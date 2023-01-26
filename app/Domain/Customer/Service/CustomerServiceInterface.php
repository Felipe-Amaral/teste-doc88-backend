<?php

declare(strict_types=1);

namespace App\Domain\Customer\Service;

use App\Domain\Customer\Resource\CustomerCollection;

interface CustomerServiceInterface
{
    public function getList(): CustomerCollection;
}
