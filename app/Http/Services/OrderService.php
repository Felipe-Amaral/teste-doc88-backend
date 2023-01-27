<?php

declare(strict_types=1);

namespace App\Http\Services;

use App\Domain\Order\Resource\OrderCollection;
use App\Domain\Order\Service\OrderServiceInterface;
use App\Models\Order;

class OrderService implements OrderServiceInterface
{
    public function getList(): OrderCollection
    {
        $result = Order::All();

        return new OrderCollection($result);
    }
}
