<?php

namespace App\Providers;

use App\Http\ViewComposers\HeaderComposer;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot() {
        view()->composer('shop', HeaderComposer::class);

    }

    public function register()
    {

    }
}
