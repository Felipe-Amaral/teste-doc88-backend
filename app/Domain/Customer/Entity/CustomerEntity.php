<?php

declare(strict_types=1);

namespace App\Domain\Customer\Entity;

use Illuminate\Contracts\Support\Arrayable;

class CustomerEntity implements Arrayable
{
    private ?string $name;
    private ?string $email;
    private ?string $phone;
    private ?string $bornDate;
    private ?string $adress;
    private ?string $adressComplement;
    private ?string $district;
    private ?string $cep;
    private ?string $createdAt;

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

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $data): void
    {
        $this->email = $data;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $data): void
    {
        $this->phone = $data;
    }

    public function getBornDate(): string
    {
        return $this->bornDate;
    }

    public function setBornDate(string $data): void
    {
        $this->bornDate = $data;
    }

    public function getAdress(): string
    {
        return $this->adress;
    }

    public function setAdress(string $data): void
    {
        $this->adress = $data;
    }

    public function getAdressComplement(): string
    {
        return $this->adressComplement;
    }

    public function setAdressComplement(string $data): void
    {
        $this->adressComplement = $data;
    }

    public function getDistrict(): string
    {
        return $this->district;
    }

    public function setDistrict(string $data): void
    {
        $this->district = $data;
    }

    public function getCep(): string
    {
        return $this->cep;
    }

    public function setCep(string $data): void
    {
        $this->cep = $data;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public function setCreatedAt(string $data): void
    {
        $this->createdAt = $data;
    }

    private function populate(array $data): void
    {
        $this->setName($data['name'] ?? null);
        $this->setName($data['email'] ?? null);
        $this->setName($data['phone'] ?? null);
        $this->setName($data['bornDate'] ?? null);
        $this->setName($data['adress'] ?? null);
        $this->setName($data['adressComplement'] ?? null);
        $this->setName($data['district'] ?? null);
        $this->setName($data['cep'] ?? null);
        $this->setName($data['createdAt'] ?? null);
    }
}
