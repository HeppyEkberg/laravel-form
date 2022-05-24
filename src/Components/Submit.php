<?php

namespace HeppyEkberg\LaravelForm\Components;

use Illuminate\Contracts\View\View;
use HeppyEkberg\LaravelForm\Input;

class Submit extends Input
{
    public function render(): View
    {
        return view('LaravelForm::submit');
    }
}
