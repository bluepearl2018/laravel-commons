<?php

namespace Eutranet\Commons\Http\Controllers;

use Eutranet\Commons\Models\Kinship;
use Illuminate\Http\Request;

/**
 * As an extension of base Crud controller, which is protected by the auth:admin middleware
 * Kinship controller allows management of kinships
 */
class KinshipController extends BaseCrudController
{

	/**
	 * @param Kinship $kinship
	 */
	public function __construct(Kinship $kinship)
	{
		$resourceName = 'Kinship';
		$tableName = 'kinships';
		parent::__construct($kinship, $resourceName, $tableName);
	}

	/**
	 * @return mixed
	 */
	public function inputStore(Request $request): array
	{
		$rules = [
			'name' => 'string|max:50',
			'description' => 'string|max:120'
		];
		return $request->validate($rules);
	}

	/**
	 * @return mixed
	 */
	public function inputUpdate(Request $request): array
	{
		$rules = [
			'name' => 'string|max:50',
			'description' => 'string|max:120'
		];
		return $request->validate($rules);
	}
}
