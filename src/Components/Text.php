<?php

namespace HeppyEkberg\LaravelForm\Components;

use HeppyEkberg\LaravelForm\Input;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Text extends Input
{
    public function render(): View
    {
        return view('LaravelForm::text');
    }

}
