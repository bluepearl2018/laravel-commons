<?php

namespace Eutranet\Commons\Http\Controllers;

use Eutranet\Commons\Models\CarBrand;
use Illuminate\Http\Request;

/**
 * As an extension of base Crud controller, which is protected by the auth:admin middleware
 * Car brand controller allows car brands management
 */
class CarBrandController extends BaseCrudController
{

	/**
	 * @param CarBrand $carBrand
	 */
	public function __construct(CarBrand $carBrand)
	{
		$resourceName = 'Car brand';
		$tableName = 'car_brands';
		parent::__construct($carBrand, $resourceName, $tableName);
	}

	/**
	 * @return mixed
	 */
	public function inputStore(Request $request): array
	{
		$rules = [
			'name' => 'string|max:50',
			'code' => 'string|max:5'
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
			'code' => 'string|max:5'
		];
		return $request->validate($rules);
	}
}
