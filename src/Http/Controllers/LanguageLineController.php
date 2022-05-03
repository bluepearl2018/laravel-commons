<?php

namespace Eutranet\Commons\Http\Controllers;

use Illuminate\Http\Request;
use Eutranet\Commons\Models\LanguageLine;

/**
 * The Menu controller allows administrators to configure and modify menus
 */
class LanguageLineController extends BaseCrudController
{
    /**
     * The menu controller is accessible to authenticated administrators
     * @param LanguageLine $languageLine
     */
    public function __construct(LanguageLine $languageLine)
    {
        $this->middleware('auth:admin');
        $resourceName = 'LanguageLine';
        $tableName = 'language_lines';
        parent::__construct($languageLine, $resourceName, $tableName);
    }

    /**
     * @return mixed
     */
    public function inputStore(Request $request): array
    {
        $rules = [
            'group' => 'required|string|max:255',
            'key' => 'required|string|max:255',
            'text' => 'required|string|max:1024',
        ];
        $request->validate($rules);
        return [
            'group' => $request->group,
            'key' => $request->key,
            'text' => $request->text
        ];
    }

    /**
     * @return mixed
     */
    public function inputUpdate(Request $request): array
    {
        $rules = [
            'group' => 'required|string|max:255',
            'key' => 'required|string|max:255',
            'text' => 'required|string|max:1024',
        ];
        $request->validate($rules);
        return [
            'group' => $request->group,
            'key' => $request->key,
            'text' => $request->text
        ];
    }
}
