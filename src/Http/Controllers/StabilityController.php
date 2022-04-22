<?php

namespace Eutranet\Commons\Http\Controllers;

use Eutranet\Commons\Models\Stability;
use Illuminate\Http\Request;

/**
 * As an extension of base Crud controller, which is protected by the auth:admin middleware
 * Stability controller allows stability management.
 * Stabiliy is for any stability related combo.
 */
class StabilityController extends BaseCrudController
{

	/**
	 * @param Stability $stability
	 */
	public function __construct(Stability $stability)
	{
		$viewPath = 'commons::stabilities';
		$resourceName = 'Stability';
		$tableName = 'stabilities';
		parent::__construct($stability, $viewPath, $resourceName, $tableName);
	}

	/**
	 * @return mixed
	 */
	public function inputStore(Request $request): array
	{
		$rules = [
			'code' => 'required|string|max:50',
			'name' => 'required|string|max:50',
			'description' => 'nullable|string|max:240',
		];
		return $request->validate($rules);
	}

	/**
	 * @return mixed
	 */
	public function inputUpdate(Request $request): array
	{
		$rules = [
			'code' => 'required|string|max:50',
			'name' => 'required|string|max:50',
			'description' => 'nullable|string|max:240',
		];
		return $request->validate($rules);
	}
}
