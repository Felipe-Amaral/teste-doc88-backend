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
        $this->setEmail($data['email'] ?? null);
        $this->setPhone($data['phone'] ?? null);
        $this->setBornDate($data['bornDate'] ?? null);
        $this->setAdress($data['adress'] ?? null);
        $this->setAdressComplement($data['adressComplement'] ?? null);
        $this->setDistrict($data['district'] ?? null);
        $this->setCep($data['cep'] ?? null);
        $this->setCreatedAt($data['createdAt'] ?? null);
    }

    public function toArray(): array
    {
        return [
            'name' => $this->getName(),
            'email' => $this->getEmail(),
            'phone' => $this->getPhone(),
            'bornDate' => $this->getBornDate(),
            'adress' => $this->getAdress(),
            'adressComplement' => $this->getAdressComplement(),
            'district' => $this->getDistrict(),
            'cep' => $this->getCep(),
            'createdAt' => $this->getCreatedAt(),
        ];
    }
}
