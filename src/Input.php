<?php

namespace HeppyEkberg\LaravelForm;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Input extends Component
{
    public ?string $name;
    public ?string $id;
    public ?string $class;
    public ?string $label;
    public ?string $value;
    public ?string $key;

    public bool $hasError = false;
    public ?array $error = [];

    protected bool $fetchOld = true;

    public function __construct(string $name = null,
                                string $id = null,
                                string $class = null,
                                string $label = null,
                                string $value = null,
                                string $key = null)
    {
        $this->name = $name;
        $this->label = $label;
        $this->class =  trim($class);

        if (is_null($id)) {
            $id = Str::of($name)->replace('[', '.')->replace(']', '')->toString();
        }

        if (is_null($key)) {
            $key = $id;
        }

        $this->id = $id;
        $this->key = $key;
        $this->value = $this->fetchOld ? old($key, $value) : $value;

        $this->checkErrors();
    }

    protected function checkErrors()
    {
        $errors = session('errors');

        if (!$errors || !$errors->has($this->key)) {
            return;
        }

        $this->class = $this->class . " is-invalid";
        $this->hasError = true;
        $this->error = $errors->get($this->key);
    }

    public function showErrors(): string
    {
        return collect($this->error)->implode('<br>');
    }

    public function render()
    {

    }


}
