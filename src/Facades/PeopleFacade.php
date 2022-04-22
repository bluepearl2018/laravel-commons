<?php

namespace Eutranet\Commons\Facades;

use Illuminate\Support\Facades\Facade;
use Eutranet\Commons\Models\Country;
use Str;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

abstract class PeopleFacade extends Facade
{
	protected string $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public static function display($packageName, $class, $routePrefix = NULL): View|Factory|Application
	{
		$namespace = 'Eutranet\\' . Str::Studly($packageName) . '\\Models';
		$name = '\\' . $namespace . '\\' . Str::studly($class);
		$fields = $name::getFields();
		if ($name::getFields()) {
			return view($packageName . '::components.create',
				[
					'name' => Str::snake(Str::Studly($class)),
					'id' => $name . '-id',
					'class' => $class,
					'lead' => $name::getClassLead(),
					'fields' => $fields,
					'routePrefix' => $routePrefix ?? 'setup',
				]
			);
		} else {
			return view($packageName . '::components.error', ['error' => __('Missing getFields()')]);
		}
	}
}
