<?php

namespace App\Providers;

use App\Interfaces\JobRepositoryInterface;
use App\Interfaces\TalentRepositoryInterface;
use App\Interfaces\UserRepositoryInterface;
use App\Repositories\JobRepository;
use App\Repositories\TalentRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(TalentRepositoryInterface::class, TalentRepository::class);
        $this->app->bind(JobRepositoryInterface::class, JobRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
