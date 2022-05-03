<?php

namespace Eutranet\Commons\Http\Controllers;

use Eutranet\Commons\Models\UserStatus;
use Illuminate\Http\Request;

/**
 * As an extension of base Crud controller, which is protected by the auth:admin middleware
 * User status controller allows stability management.
 * User status is for any user status related combo.
 */
class UserStatusController extends BaseCrudController
{
    /**
     * @param UserStatus $userStatus
     */
    public function __construct(UserStatus $userStatus)
    {
        $resourceName = 'User status';
        $tableName = 'user_statuses';
        parent::__construct($userStatus, $resourceName, $tableName);
    }

    /**
     * @return mixed
     */
    public function inputStore(Request $request): array
    {
        $rules = [
            'code' => 'required|string|max:50',
            'name' => 'required|string|max:50',
            'description' => 'nullable|string|max:240'
        ];
        return $request->validate($rules);
    }

    /**
     * @return mixed
     */
    public function inputUpdate(Request $request): array
    {
        $rules = [
            'code' => 'required|string|max:50',
            'name' => 'required|string|max:50',
            'description' => 'nullable|string|max:240'
        ];
        return $request->validate($rules);
    }
}
