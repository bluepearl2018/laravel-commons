<?php

namespace Eutranet\Commons\Http\Controllers;

use Eutranet\Commons\Models\AssetCategory;
use Illuminate\Http\Request;
use Str;

/**
 * As an extension of base Crud controller, which is protected by the auth:admin middleware
 * Asset category controller allows asset categories management
 */
class AssetCategoryController extends BaseCrudController
{
    /**
     * @param AssetCategory $assetCategory
     */
    public function __construct(AssetCategory $assetCategory)
    {
        $this->middleware(['auth:admin']);
        $resourceName = 'AssetCategory';
        $tableName = 'asset_categories';
        parent::__construct($assetCategory, $resourceName, $tableName);
    }

    /**
     * @return mixed
     */
    public function inputStore(Request $request): array
    {
        $rules = [
            'asset_category_id' => 'nullable|exists:asset_categories,id',
            'code' => 'string|max:50',
            'name' => 'string|max:50',
            'description' => 'nullable|string|max:240',
        ];
        $request->validate($rules);
        return [
            'asset_category_id' => $request->asset_category_id,
            'code' => $request->code === null ? Str::slug(request()->name) : $request->code,
            'name' => $request->name,
            'description' => $request->description,
        ];
    }

    /**
     * @return mixed
     */
    public function inputUpdate(Request $request): array
    {
        $rules = [
            'asset_category_id' => 'nullable|exists:asset_categories,id',
            'code' => 'string|max:50',
            'name' => 'string|max:50',
            'description' => 'nullable|string|max:240',
        ];
        $request->validate($rules);
        return [
            'asset_category_id' => $request->asset_category_id,
            'code' => $request->code === null ? Str::slug(request()->name) : $request->code,
            'name' => $request->name,
            'description' => $request->description,
        ];
    }
}
