<?php

declare(strict_types=1);

namespace App\Http\Services;

use App\Domain\Product\Resource\ProductCollection;
use App\Domain\Product\Service\ProductServiceInterface;
use App\Models\Product;

class ProductService implements ProductServiceInterface
{
    public function getList(): ProductCollection
    {
        $result = Product::All();

        return new ProductCollection($result);
    }
}
