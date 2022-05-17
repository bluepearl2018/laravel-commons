<?php

namespace Eutranet\Commons\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use JetBrains\PhpStorm\ArrayShape;
use Spatie\Translatable\HasTranslations;

/**
 * Matrimonial Regime is to describe and save matrimonial regimes
 * Stored in DB cos of translation requirements
 */
class MatrimonialRegime extends Model
{
    use HasTranslations;

    protected $table = "matrimonial_regimes";
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
        return trans('matrimonial-regimes.class-lead') . ' ' . 'Matrimonial regimes, or marital property systems, are systems of property ownership between spouses providing for the creation or absence of a marital estate and if created, what properties are included in that estate, how and by whom it is managed, and how it will be divided and inherited at the end of the marriage. Matrimonial regimes are applied either by operation of law or by way of prenuptial agreement in civil-law countries, and depend on the lex domicilii of the spouses at the time of or immediately following the wedding.';
    }

    #[ArrayShape(['name' => "string[]"])] public function getFields(): array
    {
        // field, type, required, placeholder, tip, model for select
        return [
            'name' => ['input', 'text', 'required', trans('matrimonial-regimes.Name'), trans('matrimonial-regimes.Enter the name')],
        ];
    }

}
