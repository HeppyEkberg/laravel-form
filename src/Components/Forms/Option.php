<?php

namespace HeppyEkberg\Larcom\Components\Forms;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use function HeppyEkberg\Larcom\Components\view;

class Option extends Component
{
    public function render(): View
    {
        return view('Larcom::forms.option');
    }
}
