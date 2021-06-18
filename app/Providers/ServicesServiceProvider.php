<?php

namespace App\Providers;


use App\Services\Movies\MoviesService;
use App\Services\Movies\MoviesServiceInterface;
use App\Services\Posts\PostService;
use App\Services\Posts\PostServiceInterface;
use App\Services\Files\FileService;
use App\Services\Files\FileServiceInterface;
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
