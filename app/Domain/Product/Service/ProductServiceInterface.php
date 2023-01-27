<?php

declare(strict_types=1);

namespace App\Domain\Product\Service;

use App\Domain\Product\Resource\ProductCollection;

interface ProductServiceInterface
{
    public function getList(): ProductCollection;
}
