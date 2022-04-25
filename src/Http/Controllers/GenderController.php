<?php

namespace Eutranet\Commons\Http\Controllers;

use Eutranet\Commons\Models\Gender;
use Illuminate\Http\Request;

/**
 * As an extension of base Crud controller, which is protected by the auth:admin middleware
 * Gender controller allows management of user genders
 */
class GenderController extends BaseCrudController
{

	/**
	 * @param Gender $gender
	 */
	public function __construct(Gender $gender)
	{
		$resourceName = 'Gender';
		$tableName = 'genders';
		parent::__construct($gender, $resourceName, $tableName);
	}

	/**
	 * @return mixed
	 */
	public function inputStore(Request $request): array
	{
		$rules = [
			'name_abbrev' => 'string|max:20|not_in:genders,name_abbrev',
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
			'name_abbrev' => 'string|max:20|not_in:genders,name_abbrev',
			'name' => 'string|max:50'
		];
		return $request->validate($rules);
	}
}
