<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function boot() {}

    public function register()
    {
        $this->app->bind("App\Repositories\Category\CategoryRepositoryInterface", "App\Repositories\Category\CategoryRepository");
        $this->app->bind("App\Repositories\Users\UserRepositoryInterface", "App\Repositories\Users\UserRepository");
    }
}
