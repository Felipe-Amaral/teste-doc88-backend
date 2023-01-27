<?php

declare(strict_types=1);

namespace App\Domain\Order\Service;

use App\Domain\Order\Entity\OrderEntity;
use App\Domain\Order\Resource\OrderCollection;

interface OrderServiceInterface
{
    public function getList(): OrderCollection;

    public function findById(): OrderEntity;

    public function create(): bool;

    public function update(): bool;

    public function delete(): bool;
}
