<?php

namespace HeppyEkberg\LaravelForm;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider AS DefaultServiceProvider;

class ServiceProvider extends DefaultServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/Resources/views', 'LaravelForm');
        Blade::componentNamespace('HeppyEkberg\\LaravelForm\\Components', 'form');
    }

    public function register() {

    }
}
