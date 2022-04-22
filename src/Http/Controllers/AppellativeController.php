<?php

namespace Eutranet\Commons\Http\Controllers;

use Eutranet\Commons\Models\Appellative;
use Illuminate\Http\Request;


/**
 * As an extension of base Crud controller, which is protected by the auth:admin middleware
 * Appellative controller allows appellative management
 */
class AppellativeController extends BaseCrudController
{
	/**
	 * @param Appellative $appellative
	 */
	public function __construct(Appellative $appellative)
	{
		$viewPath = 'commons::appellatives';
		$resourceName = 'Appellative';
		$tableName = 'appellatives';
		parent::__construct($appellative, $viewPath, $resourceName, $tableName);
	}

	/**
	 * @return mixed
	 */
	public function inputStore(Request $request): array
	{
		$rules = [
			'name_prefix' => 'string|max:20|not_in:appellatives,name_prefix',
			'name' => 'string|max:50'
		];
		return $request->validate($rules);
	}

	/**
	 * @return mixed
	 */
	public function inputUpdate(Request $request): array
	{
		$rules = [
			'name_prefix' => 'string|max:20|not_in:appellatives,name_prefix',
			'name' => 'string|max:50'
		];
		return $request->validate($rules);
	}
}
