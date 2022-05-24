<?php

namespace HeppyEkberg\Larcom\Components\Cards;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    public function render(): View
    {
        return view('Larcom::card.footer');
    }

}
