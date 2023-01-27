<?php

declare(strict_types=1);

namespace App\Domain\Order\Service;

use App\Domain\Order\Resource\OrderCollection;

interface OrderServiceInterface
{
    public function getList(): OrderCollection;
}
