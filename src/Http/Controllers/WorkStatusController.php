<?php

namespace Eutranet\Commons\Http\Controllers;

use Eutranet\Commons\Models\WorkStatus;
use Illuminate\Http\Request;

/**
 * As an extension of base Crud controller, which is protected by the auth:admin middleware
 * Work status controller allows work status management.
 * Work status is for any work status related combo.
 */
class WorkStatusController extends BaseCrudController
{

	/**
	 * Admin can manage assets
	 */
	public function __construct(WorkStatus $workStatus)
	{
		$resourceName = 'Work status';
		$tableName = 'work_statuses';
		parent::__construct($workStatus, $resourceName, $tableName);
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
