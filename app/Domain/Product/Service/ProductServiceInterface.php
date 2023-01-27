<?php

declare(strict_types=1);

namespace App\Domain\Product\Service;

use App\Domain\Customer\Resource\CustomerCollection;

interface ProductServiceInterface
{
    public function getList(): CustomerCollection;
}
