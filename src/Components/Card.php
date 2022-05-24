<?php

namespace HeppyEkberg\Larcom\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public ?string $title;
    public bool $body;

    public function __construct(string $title = null, bool $body = true)
    {
        $this->title = $title;
        $this->body = $body;
    }

    public function render(): View
    {
        return view('Larcom::card.card');
    }

}
