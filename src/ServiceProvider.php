<?php

namespace HeppyEkberg\Larcom;

use HeppyEkberg\Larcom\Components\Bootstrap\Column;
use HeppyEkberg\Larcom\Components\Bootstrap\Row;
use HeppyEkberg\Larcom\Components\Card;
use HeppyEkberg\Larcom\Components\Form;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider as DefaultServiceProvider;

class ServiceProvider extends DefaultServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/Resources/views', 'Larcom');
        $this->loadViewsFrom(__DIR__.'/Resources/views/alert', 'alert');

        Blade::component('card', Card::class);
        Blade::component('form', Form::class);
        Blade::component('row', Row::class);
        Blade::component('column', Column::class);

        Blade::componentNamespace('HeppyEkberg\\Larcom\\Components\\Forms', 'form');
        Blade::componentNamespace('HeppyEkberg\\Larcom\\Components\\Cards', 'card');
    }

    public function register() {

    }
}
