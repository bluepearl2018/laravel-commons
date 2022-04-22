<?php

namespace Eutranet\Commons\Models;

use Florbela\Users\Models\UserInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use JetBrains\PhpStorm\ArrayShape;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;


/**
 * The Appellative class is to describe and save appellatives into DB
 * Many HasMany relatiionships are to be created for any statistical requirement.
 */
class Appellative extends Model
{
	use HasTranslations;
	use HasFactory;

	/**
	 * @var string
	 */
	protected $table = "appellatives";
	/**
	 * @var string[]
	 */
	protected $fillable = ['name', 'name_prefix'];
	/**
	 * @var array|string[]
	 */
	protected array $translatable = ['name', 'name_prefix'];

	/**
	 * @return string[][]
	 */
	#[ArrayShape(['name_prefix' => "string[]", 'name' => "string[]"])]
	public static function getFields(): array
	{
		// field, type, required, placeholder, tip, model for select
		return [
			'name_prefix' => ['input', 'text', 'required', 'Prefix', 'Enter the name prefix'],
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
	 * For statitics
	 * @return HasMany
	 */
	public function userInfos(): HasMany
	{
		return $this->hasMany(UserInfo::class);
	}
}
