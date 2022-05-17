<?php

namespace Eutranet\Commons\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use JetBrains\PhpStorm\ArrayShape;
use Spatie\Translatable\HasTranslations;

/**
 * User Status is to describe and save user status
 * Stored in DB cos of translation requirements
 * Belongs to Commons. However, please not content is Adaptable according project requirements
 */
class UserStatus extends Model
{
    use HasTranslations;

    protected $table = "user_statuses";
    protected $fillable = ['code', 'name', 'description'];
    protected array $translatable = ['name', 'description'];

    #[ArrayShape(['code' => "string[]", 'name' => "string[]", 'description' => "string[]"])]
    public static function getFields(): array
    {
        return [
            'code' => ['input', 'text', 'required', trans('user-statuses.Code'), trans('user-statuses.Enter a code')],
            'name' => ['input', 'text', 'required', trans('user-statuses.Name'), trans('user-statuses.Enter the name')],
            'description' => ['input', 'textarea', 'optional', trans('user-statuses.Description'), trans('user-statuses.Enter the description')],
        ];
    }

    public static function getClassLead(): string
    {
        return trans('user-statuses.class-lead'). ' ' . 'User status is the status for orders or notifications which can be set/reset by user. It is same as system status. But in case of system status the system generate the status. User cannot do anything to stop or to change the system status';
    }

    /**
     * This static function is essential for the documentation service provider
     * The namespace is saved into doc_models table
     * @return string
     */
    public static function getNamespace(): string
    {
        return __NAMESPACE__;
    }

    /**
     * @return HasMany
     *
     */
    public function user(): HasMany
    {
        return $this->hasMany(User::class, 'user_id');
    }
}
