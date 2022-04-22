<?php

namespace Eutranet\Commons\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Spatie\Translatable\HasTranslations;
use Florbela\Users\Models\UserFamily;

/**
 * Kinship is to describe and save kinship degrees
 * Stored in DB cos of translation requirements
 */
class Kinship extends Model
{

	use HasTranslations;

	protected $table = 'kinships';

	protected $fillable = [
		'name',
		'description'
	];

	protected array $translatable = [
		'name',
		'description'
	];

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
	 * @return HasMany
	 */
	public function userGuidances(): HasMany
	{
		return $this->hasMany(UserFamily::class);
	}

	/**
	 * @return HasManyThrough
	 */
	public function users(): HasManyThrough
	{
		return $this->hasManyThrough(User::class, UserFamily::class);
	}
}
