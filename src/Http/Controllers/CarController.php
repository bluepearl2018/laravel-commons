<?php


namespace Eutranet\Commons\Http\Controllers;

use Eutranet\Commons\Models\AssetCategory;
use Illuminate\Http\Request;
use Eutranet\Commons\Models\Car;


/**
 * As an extension of base Crud controller, which is protected by the auth:admin middleware
 * Car controller allows car management
 */
class CarController extends BaseCrudController
{

	/**
	 * @param Car $car
	 */
	public function __construct(Car $car)
	{
		$viewPath = 'commons::cars';
		$resourceName = 'Car';
		$tableName = 'cars';
		parent::__construct($car, $viewPath, $resourceName, $tableName);
	}

	/**
	 * @return mixed
	 */
	public function inputStore(Request $request): array
	{
		$rules = [
			'asset_category_id' => 'exists|asset_categories,id',
			'car_brand_id' => 'required|exists|car_brands,id',
			'name' => 'string|max:50',
			'code' => 'string|max:5'
		];
		$request->validate($rules);
		return [
			'asset_category_id' => AssetCategory::where('code', 'vehicles')->get()->first()->id,
			'name' => $request->name,
			'code' => $request->code,
		];
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
