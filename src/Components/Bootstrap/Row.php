<?php

namespace HeppyEkberg\Larcom\Components\Bootstrap;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Row extends Component
{
    public function render(): View
    {
        return view('Larcom::bootstrap.row');
    }
}
