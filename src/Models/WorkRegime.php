<?php

namespace Eutranet\Commons\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use JetBrains\PhpStorm\ArrayShape;
use Spatie\Translatable\HasTranslations;
use Florbela\Users\Models\UserEmployment;

/**
 * Work Regime is to describe and save work regimes
 * Stored in DB cos of translation requirements
 * Would be nice to get all legal work regimes available
 */
class WorkRegime extends Model
{

	use HasTranslations;

	protected $table = "work_regimes";
	protected $fillable = ['name', 'description'];
	protected array $translatable = ['name', 'description'];

	#[ArrayShape(['name' => "string[]"])]
	public static function getFields(): array
	{
		return [
			'name' => ['input', 'text', 'required', 'Name', 'Enter the name'],
		];
	}

	public static function getClassLead(): string
	{
		return '';
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
	 * Get user Employments by work regime
	 * @return HasMany
	 */
	public function userEmployments(): HasMany
	{
		return $this->hasMany(UserEmployment::class);
	}

	/**
	 * Get user Employments by work regime
	 * @return HasManyThrough
	 */
	public function users(): HasManyThrough
	{
		return $this->hasManyThrough(User::class, UserEmployment::class);
	}
}
