<?php

declare(strict_types=1);

namespace App\Providers;

use App\Domain\Order\Service\OrderServiceInterface;
use App\Http\Services\OrderService;
use Illuminate\Support\ServiceProvider;

class OrderServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(OrderServiceInterface::class, OrderService::class);
    }
}
