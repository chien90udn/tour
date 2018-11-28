<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Country;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('option', \App\Support\Option\Option::class);

        view()->composer('*', function ($view) {
            $key = 'popup.list_country';
            if (! \Cache::has($key)) {
                $data = Country::all()->mapWithKeys(function($query){
                    return [
                        $query->location => $query->location,
                    ];
                });
                \Cache::put($key, $data, 5);
            }
            $view->with('list_country', \Cache::get($key));
        });
    }
}
