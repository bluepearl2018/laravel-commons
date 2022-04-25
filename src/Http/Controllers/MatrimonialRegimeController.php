<?php

namespace Eutranet\Commons\Http\Controllers;

use Eutranet\Commons\Models\MatrimonialRegime;
use Illuminate\Http\Request;

/**
 * As an extension of base Crud controller, which is protected by the auth:admin middleware
 * Matrimonial regime controller allows matrimonioal regimes management
 */
class MatrimonialRegimeController extends BaseCrudController
{

	/**
	 * @param MatrimonialRegime $matrimonialRegime
	 */
	public function __construct(MatrimonialRegime $matrimonialRegime)
	{
		$resourceName = 'Matrimonial Regime';
		$tableName = 'matrimonial_regimes';
		parent::__construct($matrimonialRegime, $resourceName, $tableName);
	}

	/**
	 * @return mixed
	 */
	public function inputStore(Request $request): array
	{
		$rules = [
			'name' => 'required|string|max:50',
		];
		$request->validate($rules);
		return [
			'name' => $request->name
		];
	}

	/**
	 * @return mixed
	 */
	public function inputUpdate(Request $request): array
	{
		$rules = [
			'name' => 'required|string|max:50',
		];
		$request->validate($rules);
		return [
			'name' => $request->name
		];
	}
}
