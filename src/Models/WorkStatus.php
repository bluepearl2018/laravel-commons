<?php

namespace Eutranet\Commons\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use JetBrains\PhpStorm\ArrayShape;
use Spatie\Translatable\HasTranslations;
use Eutranet\FlorbelaBackend\Models\UserEmployment;

/**
 * Work status is to describe and save work statues
 * Stored in DB cos of translation requirements
 */
class WorkStatus extends Model
{
    use HasTranslations;

    protected $table = "work_statuses";
    protected $fillable = ['name'];
    protected array $translatable = ['name'];

    #[ArrayShape(['name' => "string[]"])]
    public static function getFields(): array
    {
        return [
	        'name' => ['input', 'text', 'required', trans('work-statuses.Name'), trans('work-statuses.Enter the name')],
        ];
    }

    public static function getClassLead(): string
    {
        return trans('work-statuses.class-lead') . ' ' . 'The legal status and classification of someone in employment as either an employee or working on their own account (self-employed). ';
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
     * Get user employments by work statuts
     * @return HasMany
     */
    public function userEmployments(): HasMany
    {
        return $this->hasMany(UserEmployment::class);
    }

    /**
     * Get users via user employments
     * @return HasManyThrough
     */
    public function users(): HasManyThrough
    {
        return $this->hasManyThrough(User::class, UserEmployment::class);
    }
}
