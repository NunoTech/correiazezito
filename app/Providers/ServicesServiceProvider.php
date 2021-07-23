<?php

namespace App\Providers;


use App\Services\Caches\CacheService;
use App\Services\Caches\CacheServiceInterface;
use App\Services\Ceps\CepServices;
use App\Services\Ceps\CepServicesInterface;
use App\Services\Movies\MoviesService;
use App\Services\Movies\MoviesServiceInterface;
use App\Services\Posts\PostService;
use App\Services\Posts\PostServiceInterface;
use App\Services\Files\FileService;
use App\Services\Files\FileServiceInterface;
use App\Services\Users\UsersService;
use App\Services\Users\UsersServiceInterface;
use Illuminate\Support\ServiceProvider;

class ServicesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PostServiceInterface::class, PostService::class);
        $this->app->bind(FileServiceInterface::class, FileService::class);
        $this->app->bind(MoviesServiceInterface::class, MoviesService::class);
        $this->app->bind(CacheServiceInterface::class, CacheService::class);
        $this->app->bind(UsersServiceInterface::class, UsersService::class);
        $this->app->bind(CepServicesInterface::class, CepServices::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
