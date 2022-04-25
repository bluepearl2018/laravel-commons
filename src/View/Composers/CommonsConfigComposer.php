<?php

namespace Eutranet\Commons\View\Composers;

use Illuminate\View\View;

class CommonsConfigComposer
{

	public function __construct()
	{
		$this->config = config('eutranet-commons');
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
			->with('name', $this->config['name'])
			->with('description', $this->config['description'])
			->with('tables', $this->config['tables'])
			->with('migrations', $this->config['migrations'])
		;
	}
}