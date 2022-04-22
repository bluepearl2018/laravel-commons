<?php

namespace Eutranet\Commons\Http\Controllers;

use Eutranet\Commons\Models\Language;
use Illuminate\Http\Request;

/**
 * As an extension of base Crud controller, which is protected by the auth:admin middleware
 * Language controller allows management of languages
 */
class LanguageController extends BaseCrudController
{

	/**
	 * @param Language $language
	 */
	public function __construct(Language $language)
	{
		$viewPath = 'commons::languages';
		$resourceName = 'Language';
		$tableName = 'languages';
		parent::__construct($language, $viewPath, $resourceName, $tableName);
	}

	/**
	 * @return mixed
	 */
	public function inputStore(Request $request): array
	{
		$rules = [
			'code' => 'string|max:5',
			'name' => 'string|max:120'
		];
		return $request->validate($rules);
	}

	/**
	 * @return mixed
	 */
	public function inputUpdate(Request $request): array
	{
		$rules = [
			'code' => 'string|max:5',
			'name' => 'string|max:120'
		];
		return $request->validate($rules);
	}
}
