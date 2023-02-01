<?php

declare(strict_types=1);

namespace App\Http\Services;

use App\Domain\Product\Entity\ProductEntity;
use App\Domain\Product\Resource\ProductCollection;
use App\Domain\Product\Service\ProductServiceInterface;
use App\Http\Request\Product\ProductStoreRequest;
use App\Http\Request\Product\ProductUpdateRequest;
use App\Models\Product;

class ProductService implements ProductServiceInterface
{
    public function getList(): ProductCollection
    {
        $result = Product::All();

        return new ProductCollection($result);
    }

    public function findById(int $id): ProductEntity
    {
        $result = Product::find($id);

        return new ProductEntity($result->toArray());
    }

    public function store(ProductStoreRequest $request): bool
    {
        if (Product::create($request->toArray())) {
            return true;
        }

        return false;
    }

    public function update(ProductUpdateRequest $request, int $id): bool
    {
        if (Product::where('id', $id)->update($request->toArray())) {
            return true;
        }

        return false;
    }

    public function delete(int $id): bool
    {
        if (Product::where('id', $id)->delete()) {
            return true;
        }

        return false;
    }
}
