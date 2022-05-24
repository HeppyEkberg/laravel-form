<?php

namespace HeppyEkberg\LaravelForm\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Form extends Component
{
    public string $method;
    public string $action;

    public function __construct(string $method = 'GET', string $action)
    {
        $this->method = $method;
        $this->action = $action;
    }

    public function render(): View
    {
        return view('LaravelForm::form');
    }

}
