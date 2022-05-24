<?php

namespace HeppyEkberg\LaravelForm\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use HeppyEkberg\LaravelForm\Input;

class Option extends Component
{
    public function render(): View
    {
        return view('LaravelForm::option');
    }
}
