<?php

namespace App\Providers;

use App\Repositories\Files\FileRepository;
use App\Repositories\Files\FileRepositoryInterface;
use App\Repositories\Posts\PostRepository;
use App\Repositories\Posts\PostRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PostRepositoryInterface::class, PostRepository::class);
        $this->app->bind(FileRepositoryInterface::class, FileRepository::class);
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
