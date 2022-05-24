<?php

namespace HeppyEkberg\Larcom\Components\Forms;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use function HeppyEkberg\Larcom\Components\view;

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
        return view('Larcom::forms.form');
    }

}
