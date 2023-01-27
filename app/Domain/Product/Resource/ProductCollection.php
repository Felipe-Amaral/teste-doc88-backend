<?php

declare(strict_types=1);

namespace App\Domain\Product\Resource;

use App\Domain\Product\Entity\ProductEntity;
use Illuminate\Support\Collection;

class ProductCollection extends Collection
{
    public function getEntityName(): string
    {
        return ProductEntity::class;
    }

    public function toArray(): array
    {
        // code...
    }
}
