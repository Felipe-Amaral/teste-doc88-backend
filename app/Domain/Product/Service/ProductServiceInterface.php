<?php

declare(strict_types=1);

namespace App\Domain\Product\Service;

use App\Domain\Product\Entity\ProductEntity;
use App\Domain\Product\Resource\ProductCollection;
use App\Http\Request\Product\ProductStoreRequest;
use App\Http\Request\Product\ProductUpdateRequest;

interface ProductServiceInterface
{
    public function getList(): ProductCollection;

    public function findById(int $id): ProductEntity;

    public function store(ProductStoreRequest $request): bool;

    public function update(ProductUpdateRequest $request, int $id): bool;

    public function delete(int $id): bool;
}
