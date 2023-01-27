<?php

declare(strict_types=1);

namespace App\Providers;

use App\Domain\Product\Service\ProductServiceInterface;
use App\Http\Services\ProductService;
use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(ProductServiceInterface::class, ProductService::class);
    }
}
