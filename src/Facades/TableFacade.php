<?php

namespace Eutranet\Commons\Facades;

use Illuminate\Support\Facades\Facade;
use Eutranet\Commons\Models\Country;
use Str;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Schema\Blueprint;

abstract class TableFacade extends Facade
{
    protected string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public static function display($packageName, $class, array $filter = null): View|Factory|Application
    {
        $namespace = 'Eutranet\\' . Str::Studly($packageName) . '\\Models';
        $name = '\\' . $namespace . '\\' . Str::studly($class);
        if (!empty($filter)) {
            $entries = $name::where($filter[0], $filter[1])->paginate(10);
        } else {
            $entries = $name::all();
        }
        if ($name::getFields()) {
            return view(
                $packageName . '::components.list',
                [
                    'class' => $class,
                    'lead' => $name::getClassLead(),
                    'fields' => $name::getFields(),
                    'model' => $name,
                    'entries' => $entries,
                    'readonly' => $readonly ?? null,
	                'routePrefix' => Str::replace('/', '', Request::route()->getPrefix()) !== null ? Str::replace('/', '', Request::route()->getPrefix()) . '.' : '',
                ]
            );
        } else {
            return view($packageName . '::components.error', ['error' => __('Missing getFields()')]);
        }
    }
}
