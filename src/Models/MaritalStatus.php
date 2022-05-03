<?php

namespace Eutranet\Commons\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use JetBrains\PhpStorm\ArrayShape;
use Spatie\Translatable\HasTranslations;

/**
 * Marital status is to describe and save marital statuses
 * Stored in DB cos of translation requirements
 */
class MaritalStatus extends Model
{
    use HasTranslations;

    protected $table = "marital_statuses";
    protected $fillable = ['name'];
    protected array $translatable = ['name'];

    /**
     * This static function is essential for the documentation service provider
     * The namespace is saved into doc_models table
     * @return string
     */
    public static function getNamespace(): string
    {
        return __NAMESPACE__;
    }

    public static function getClassLead(): string
    {
        return trans('marital-statuses.class-lead') . ' ' . 'Marital status is the legally defined marital state. There are several types of marital status: single, married, widowed, divorced, separated and, in certain cases, registered partnership. Never married persons are persons who never got married in concordance with valid regulations.';
    }

    #[ArrayShape(['name' => "string[]"])]
    public function getFields(): array
    {
        // field, type, required, placeholder, tip, model for select
        return [
            'name' => ['input', 'text', 'required', 'Name', 'Enter the name'],
        ];
    }

    /**
     * Filter MaritalStatus for statitics
     */
    public function userLegals(): HasMany
    {
        return $this->hasMany(UserLegal::class);
    }

    /**
     * A Marital status is to be found in the profile of a user-
     * @return HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
