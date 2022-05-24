<?php

namespace HeppyEkberg\Larcom\Components\Forms;

use HeppyEkberg\Larcom\Input;
use Illuminate\Contracts\View\View;


class Submit extends Input
{
    public function render(): View
    {
        return view('Larcom::forms.submit');
    }
}
