<?php

namespace App\Providers;

use App\Http\Onion\Domain\Service\Repository\MahasiswaRepositoryInterface;
use App\Http\Onion\Infrastructure\Repository\MahasiswaRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        $this->app->bind(MahasiswaRepositoryInterface::class, MahasiswaRepository::class);
    }
}
