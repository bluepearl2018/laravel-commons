<?php

namespace Eutranet\Commons\Facades;

use Illuminate\Support\Facades\Facade;
use Eutranet\Commons\Models\Country;
use Str;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

abstract class ValidationFacade extends Facade
{
    protected string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public static function display(): View|Factory|Application
    {
        return view('commons::components.validation');
    }
}
