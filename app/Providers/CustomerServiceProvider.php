<?php

declare(strict_types=1);

namespace App\Providers;

use App\Domain\Customer\Repository\CustomerRepositoryInterface;
use App\Domain\Customer\Service\CustomerServiceInterface;
use App\Http\Services\CustomerService;
use App\Models\Repository\Customer\CustomerRepository;
use Illuminate\Support\ServiceProvider;

class CustomerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(CustomerServiceInterface::class, CustomerService::class);
        $this->app->bind(CustomerRepositoryInterface::class, CustomerRepository::class);
    }
}
