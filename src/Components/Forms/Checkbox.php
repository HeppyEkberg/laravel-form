<?php

namespace HeppyEkberg\Larcom\Components\Forms;

use HeppyEkberg\Larcom\Input;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class Checkbox extends Input
{
    protected bool $fetchOld = false;
    public bool $checked;

    public function __construct(string $name,
                                string $id = null,
                                string $class = null,
                                string $label = null,
                                string $value = null,
                                string $key = null,
                                bool $checked = false)
    {
        $this->checked = $checked;
        parent::__construct($name, $id, $class, $label, $value, $key);
    }

    public function render(): View
    {
        return view('Larcom::forms.checkbox');
    }
}

