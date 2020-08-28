<?php

namespace App\Providers;

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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // view()->share('marcas', \App\Marca::all());
        view()->share('categorias', \App\Categoria::all());
        view()->share('marcas', \App\Marca::all());
    }
}
