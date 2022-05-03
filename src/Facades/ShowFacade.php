<?php

namespace Eutranet\Commons\Facades;

use Illuminate\Support\Facades\Facade;
use Eutranet\Commons\Models\Country;
use Str;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;
use Route;
use Illuminate\Support\Facades\Request;

abstract class ShowFacade extends Facade
{
    protected string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public static function display($packageName, $class, $id): View|Factory|Application
    {
        $namespace = 'Eutranet\\' . Str::Studly($packageName) . '\\Models';
        $name = '\\' . $namespace . '\\' . Str::studly($class);
        $entry = $name::find($id);
        if ($name::getFields()) {
            return view(
                $packageName . '::components.show',
                [
                    'name' => Str::snake(Str::Studly($class)),
                    'id' => $name . '-id',
                    'class' => $class,
                    'lead' => $name::getClassLead(),
                    'entry' => $entry,
                    'routePrefix' => Str::replace('/', '', Request::route()->getPrefix()) !== null ? Str::replace('/', '', Request::route()->getPrefix()) . '.' : '',
                    'fields' => $name::getFields()
                ]
            );
        } else {
            return view($packageName . '::components.error', ['error' => __('Missing getFields()')]);
        }
    }
}
