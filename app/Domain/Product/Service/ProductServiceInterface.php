<?php

declare(strict_types=1);

namespace App\Domain\Product\Service;

use App\Domain\Product\Entity\ProductEntity;
use App\Domain\Product\Resource\ProductCollection;

interface ProductServiceInterface
{
    public function getList(): ProductCollection;

    public function findById(): ProductEntity;

    public function create(): bool;

    public function update(): bool;

    public function delete(): bool;
}
