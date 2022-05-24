<?php

namespace HeppyEkberg\Larcom;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider as DefaultServiceProvider;

class ServiceProvider extends DefaultServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/Resources/views/larcom', 'Larcom');
        $this->loadViewsFrom(__DIR__.'/Resources/views/alert', 'alert');

        Blade::componentNamespace('HeppyEkberg\\Larcom\\Components\\Forms', 'form');
    }

    public function register() {

    }
}
