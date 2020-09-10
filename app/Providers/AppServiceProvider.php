<?php

namespace App\Providers;

use App\Factories\Requests\ExampleRequestFactory;
use App\Factories\Requests\JsonMapperExampleRequestFactory;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ExampleRequestFactory::class, JsonMapperExampleRequestFactory::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
