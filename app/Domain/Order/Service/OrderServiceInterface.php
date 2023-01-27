<?php

declare(strict_types=1);

namespace App\Domain\Order\Service;

use App\Domain\Customer\Resource\CustomerCollection;

interface OrderServiceInterface
{
    public function getList(): CustomerCollection;
}
