<?php

declare(strict_types=1);

namespace App\Domain\Order\Entity;

use Illuminate\Contracts\Support\Arrayable;

class OrderEntity implements Arrayable
{
    private ?int $customerId;
    private ?int $productId;
    private ?string $createdAt;

    public function __construct(array $data = [])
    {
        $this->populate($data);
    }

    public function getCustomerId(): int
    {
        return $this->customerId;
    }

    public function setCustomerId(string $data): void
    {
        $this->customerId = $data;
    }

    public function getProductId(): int
    {
        return $this->productId;
    }

    public function setProductId(string $data): void
    {
        $this->productId = $data;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public function setCreatedAt(string $data): void
    {
        $this->phone = $createdAt;
    }

    private function populate(array $data): void
    {
        $this->setName($data['customerId'] ?? null);
        $this->setName($data['productId'] ?? null);
        $this->setName($data['createdAt'] ?? null);
    }
}
