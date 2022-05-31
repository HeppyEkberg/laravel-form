<?php

namespace HeppyEkberg\Larcom\Components\Bootstrap;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\View\ComponentAttributeBag;

class Column extends Component
{
    public ?string $class;

    public function __construct(
        ?int $size = null,
        ?int $smSize = null,
        ?int $mdSize = null,
    )
    {
        $class = collect();

        if($size) {
            $class->add("col-{$size}");
        }

        if($smSize) {
            $class->add("col-sm-{$smSize}");
        }

        if($mdSize) {
            $class->add("col-md-{$mdSize}");
        }

        $this->class = $class->implode(' ');
    }

    public function render(): View
    {
        return view('Larcom::bootstrap.col');
    }
}
