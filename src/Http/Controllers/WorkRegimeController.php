<?php

namespace Eutranet\Commons\Http\Controllers;

use Eutranet\Commons\Models\WorkRegime;
use Illuminate\Http\Request;

/**
 * As an extension of base Crud controller, which is protected by the auth:admin middleware
 * Work regime controller allows work regime management.
 * Work regime is for any work regime related combo.
 */
class WorkRegimeController extends BaseCrudController
{

	/**
	 * @param WorkRegime $workRegime
	 */
	public function __construct(WorkRegime $workRegime)
	{
		$resourceName = 'Work regime';
		$tableName = 'work_regimes';
		parent::__construct($workRegime, $resourceName, $tableName);
	}

	/**
	 * @return mixed
	 */
	public function inputStore(Request $request): array
	{
		$rules = [
			'name' => 'required|string|max:50',
		];
		return $request->validate($rules);
	}

	/**
	 * @return mixed
	 */
	public function inputUpdate(Request $request): array
	{
		$rules = [
			'name' => 'required|string|max:50',
		];
		return $request->validate($rules);
	}
}
