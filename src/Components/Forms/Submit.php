<?php

namespace HeppyEkberg\Larcom\Components\Forms;

use HeppyEkberg\Larcom\Input;
use Illuminate\Contracts\View\View;
use function HeppyEkberg\Larcom\Components\view;

class Submit extends Input
{
    public function render(): View
    {
        return view('Larcom::forms.submit');
    }
}
