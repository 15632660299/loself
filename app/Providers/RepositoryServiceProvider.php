<?php

namespace App\Providers;

use App\Repositories\Eloquent\{
    UserRepositoryEloquent,
    StudentRepositoryEloquent
};
use App\Repositories\Interfaces\{
    UserRepository,
    StudentRepository
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
        //:end-bindings:
    }
}
