<?php

namespace Eutranet\Commons\View\Composers;

use Illuminate\View\View;
use Eutranet\Setup\Repository\Eliquent\ModelDocRepository;
use Eutranet\Setup\Repository\Eliquent\SetupProcessRepository;

class ViewComposer
{

	public function __construct()
	{

	}

	/**
	 * Bind data to the view.
	 *
	 * @param View $view
	 * @return void
	 */
	public function compose(View $view)
	{
		$view
			->with('test', 'Eutranet View composer ok');
	}
}