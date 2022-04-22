<?php

namespace Eutranet\Commons\View\Components\Seo;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Meta extends Component
{
	/**
	 * Create a new component instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return Application|Factory|View
	 */
	public function render(): View|Factory|Application
	{
		return view('components.seo.meta');
	}
}
