<?php

namespace Tapp\SelectCountryCode;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('select-country-code', __DIR__.'/../dist/js/field.js');
            Nova::style('select-country-code', __DIR__.'/../dist/css/field.css');
        });

        $this->publishes([
            __DIR__.'/../dist/img/flags' => public_path('vendor/tapp/nova-select-country-code'),
        ], 'public');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
