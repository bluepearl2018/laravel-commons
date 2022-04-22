<?php

namespace Eutranet\Commons\View\Components\Alerts;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Translation\Translator;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Str;

class Todo extends Component
{

	/**
	 * Create a new component instance.
	 *
	 * @return void
	 */
	public function __construct($message = NULL)
	{
		$this->message = $message;
	}

	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return Application|Factory|View
	 */
	public function render(): Factory|View|Application
	{
		return view('commons::components.alerts.todo', [
			'message' => $this->message ?? NULL
		]);
	}
}