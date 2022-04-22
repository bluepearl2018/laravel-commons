<?php

namespace Eutranet\Commons\Http\Controllers;

use Eutranet\Commons\Models\MediaCollection;
use Illuminate\Http\Request;
use Str;

/**
 * As an extension of base Crud controller, which is protected by the auth:admin middleware
 * Media collection guarantee controller allows media collection management
 * (Media collections  parameters are for spatie media collection).
 */
class MediaCollectionController extends BaseCrudController
{

	/**
	 * @param MediaCollection $mc
	 */
	public function __construct(MediaCollection $mc)
	{
		$viewPath = 'commons::media-collections';
		$resourceName = 'Media collection';
		$tableName = 'media_collections';
		parent::__construct($mc, $viewPath, $resourceName, $tableName);
	}

	/**
	 * @return mixed
	 */
	public function inputStore(Request $request): array
	{
		$rules = [
			'code' => 'nullable|string|max:50',
			'name' => 'required|string|max:50',
			'description' => 'required|string|max:50',
			'class-route' => 'required|string|max:50',
		];
		$request->validate($rules);
		return [
			'code' => $request->code === NULL ? Str::slug($request->name) : $request->code,
			'name' => $request->name,
			'description' => $request->description,
			'class-route' => $request->class_route
		];
	}

	/**
	 * @return mixed
	 */
	public function inputUpdate(Request $request): array
	{
		$rules = [
			'code' => 'nullable|string|max:50',
			'name' => 'required|string|max:50',
		];
		$request->validate($rules);
		return [
			'code' => $request->code === NULL ? Str::slug($request->name) : $request->code,
			'name' => $request->name
		];
	}
}
