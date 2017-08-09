<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class RepositoryServiceProvider
 * @package Prettus\Repository\Providers
 */
class RepositoryCommandServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;


    /**
     *
     * @return void
     */
    public function boot()
    {
        //
    }


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands('App\Repository\Generators\Commands\RepositoryCommand');
        $this->commands('App\Repository\Generators\Commands\TransformerCommand');
        $this->commands('App\Repository\Generators\Commands\PresenterCommand');
        $this->commands('App\Repository\Generators\Commands\EntityCommand');
        $this->commands('App\Repository\Generators\Commands\ValidatorCommand');
        $this->commands('App\Repository\Generators\Commands\ControllerCommand');
        $this->commands('App\Repository\Generators\Commands\BindingsCommand');
        $this->commands('App\Repository\Generators\Commands\CriteriaCommand');
    }


    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
