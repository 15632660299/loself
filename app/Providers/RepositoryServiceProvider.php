<?php

namespace App\Providers;

use App\Repositories\Eloquent\{
    ArticleRepositoryEloquent, CategoryRepositoryEloquent, ClassRepositoryEloquent, StudentRepositoryEloquent, TeacherRepositoryEloquent, UserRepositoryEloquent
};
use App\Repositories\Interfaces\{
    ArticleRepository, CategoryRepository, ClassRepository, StudentRepository, TeacherRepository, UserRepository
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
        $this->app->bind(ArticleRepository::class, ArticleRepositoryEloquent::class);
        $this->app->bind(ClassRepository::class, ClassRepositoryEloquent::class);
        $this->app->bind(TeacherRepository::class, TeacherRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Interfaces\CourseRepository::class, \App\Repositories\Eloquent\CourseRepositoryEloquent::class);
        //:end-bindings:
    }
}
