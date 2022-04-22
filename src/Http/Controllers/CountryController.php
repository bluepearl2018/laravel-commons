<?php

namespace Eutranet\Commons\Http\Controllers;

use Illuminate\Http\Request;
use Eutranet\Commons\Models\Country;

/**
 * As an extension of base Crud controller, which is protected by the auth:admin middleware
 * Country controller allows country management
 */
class CountryController extends BaseCrudController
{

	/**
	 * @param Country $country
	 */
	public function __construct(Country $country)
	{
		$viewPath = 'commons::countries';
		$resourceName = 'Country';
		$tableName = 'countries';
		parent::__construct($country, $viewPath, $resourceName, $tableName);
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
