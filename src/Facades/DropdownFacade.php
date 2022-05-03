<?php

namespace Eutranet\Commons\Facades;

use Illuminate\Support\Facades\Facade;
use Eutranet\Commons\Models\Country;
use Str;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

abstract class DropdownFacade extends Facade
{
    protected string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public static function display($packageName, $class, $required = null, $disabled = null, $readonly = null): View|Factory|Application
    {
        $namespace = 'Eutranet\\' . Str::Studly($packageName) . '\\Models';
        $name = '\\' . $namespace . '\\' . Str::studly($class);
        $entries = $name::all();
        return view(
            $packageName . '::components.dropdown',
            [
                'name' => Str::snake(Str::Studly($class)),
                'id' => $name . '-id',
                'label' => trans('commons::fields.' . $class),
                'placeholder' => trans('commons::placeholder.Select a ' . Str::title($class) . ' from the list'),
                'tip' => trans('commons::tip.Select a ' . Str::title($class) . ' from the list'),
                'required' => $required ?? false,
                'disabled' => $disabled ?? false,
                'old' => old(Str::snake(Str::Studly($class)) . '_id') ?? null,
                'entries' => $entries,
                'readonly' => $readonly ?? null
            ]
        );
    }
}
