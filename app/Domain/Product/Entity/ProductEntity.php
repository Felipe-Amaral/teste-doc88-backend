<?php

declare(strict_types=1);

namespace App\Domain\Product\Entity;

use Illuminate\Contracts\Support\Arrayable;

class ProductEntity implements Arrayable
{
    private ?string $name;
    private ?string $price;
    private ?string $photo;

    public function __construct(array $data = [])
    {
        $this->populate($data);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $data): void
    {
        $this->name = $data;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function setPrice(string $data): void
    {
        $this->price = $data;
    }

    public function getPhoto(): string
    {
        return $this->photo;
    }

    public function setPhoto(string $data): void
    {
        $this->phone = $photo;
    }

    private function populate(array $data): void
    {
        $this->setName($data['name'] ?? null);
        $this->setName($data['price'] ?? null);
        $this->setName($data['photo'] ?? null);
    }
}
