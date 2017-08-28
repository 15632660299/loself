<?php

namespace App\Providers;

use App\Repositories\Eloquent\{
    CategoryRepositoryEloquent, StudentRepositoryEloquent, UserRepositoryEloquent
};
use App\Repositories\Interfaces\{
    CategoryRepository, StudentRepository, UserRepository
};
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepository::class, UserRepositoryEloquent::class);
        $this->app->bind(StudentRepository::class, StudentRepositoryEloquent::class);
        $this->app->bind(CategoryRepository::class, CategoryRepositoryEloquent::class);
        //:end-bindings:
    }
}
