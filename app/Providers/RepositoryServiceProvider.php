<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function boot() {}

    public function register()
    {
        $this->app->bind("App\Repositories\Manager\Category\CategoryRepositoryInterface", "App\Repositories\Manager\Category\CategoryRepository");
        $this->app->bind("App\Repositories\Manager\Posts\PostRepositoryInterface", "App\Repositories\Manager\Posts\PostRepository");
        $this->app->bind("App\Repositories\Manager\Users\UserRepositoryInterface", "App\Repositories\Manager\Users\UserRepository");

        //
        $this->app->bind("App\Repositories\Web\Index\IndexRepositoryInterface", "App\Repositories\Web\Index\IndexRepository");
        $this->app->bind("App\Repositories\Web\Business\BusinessRepositoryInterface", "App\Repositories\Web\Business\BusinessRepository");
        $this->app->bind("App\Repositories\Web\Posts\PostRepositoryInterface", "App\Repositories\Web\Posts\PostRepository");
    }
}
