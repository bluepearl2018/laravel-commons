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
		return '';
	}
	
	#[ArrayShape(['name' => "string[]"])] public function getFields(): array
	{
		// field, type, required, placeholder, tip, model for select
		return [
			'name' => ['input', 'text', 'required', 'Name', 'Enter the name'],
		];
	}

	/**
	 * A Matrimonial Regimes can be useful to describe families / households
	 * @return HasMany
	 */
	public function userHousehold(): HasMany
	{
		return $this->hasMany(UserHousehold::class);
	}

	/**
	 * Retrieve users from the UserHousehodl through Matrimonial Regime-
	 * @return HasManyThrough
	 */
	public function users(): HasManyThrough
	{
		return $this->hasManyThrough(User::class, UserHousehold::class);
	}
}
