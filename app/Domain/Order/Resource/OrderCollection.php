<?php

declare(strict_types=1);

namespace App\Domain\Order\Resource;

use App\Domain\Order\Entity\OrderEntity;
use Illuminate\Support\Collection;

class OrderCollection extends Collection
{
    public function getEntityName(): string
    {
        return OrderEntity::class;
    }

    public function toArray(): array
    {
        // code...
    }
}
