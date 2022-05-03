<?php

namespace Eutranet\Commons\Http\Controllers;

use Eutranet\Commons\Models\MaritalStatus;
use Illuminate\Http\Request;
use Str;

/**
 * As an extension of base Crud controller, which is protected by the auth:admin middleware
 * Marital status controller allows management of marital statuses
 */
class MaritalStatusController extends BaseCrudController
{
    /**
     * @param MaritalStatus $maritalStatus
     */
    public function __construct(MaritalStatus $maritalStatus)
    {
        $resourceName = 'Marital status';
        $tableName = 'marital_statuses';
        parent::__construct($maritalStatus, $resourceName, $tableName);
    }

    /**
     * @return mixed
     */
    public function inputStore(Request $request): array
    {
        $rules = [
            'code' => 'nullable|string|max:50',
            'name' => 'required|string|max:50',
        ];
        $request->validate($rules);
        return [
            'code' => $request->code === null ? Str::slug($request->name) : $request->code,
            'name' => $request->name
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
            'code' => $request->code === null ? Str::slug($request->name) : $request->code,
            'name' => $request->name
        ];
    }
}
