<?php

namespace App\Providers;

use App\Models\GlobalSeo;
use Illuminate\Support\ServiceProvider;

class GlobalSeoProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $globalSeo = GlobalSeo::query()->first();
        view()->share(compact('globalSeo'));
    }
}
