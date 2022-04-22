<?php

namespace Eutranet\Commons\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use JetBrains\PhpStorm\ArrayShape;
use Spatie\Translatable\HasTranslations;

/**
 * Country is the class to describe and save countries
 * Store into DB cos of translation requirements
 * Please note ISO-2 code can be restrictive...
 * Todo ISO-3 and links to flags and so on
 * Please note COUNTRY::class IS NOT LANGUAGE::class
 * A country is not a language. Many more languages spoken than existing countries
 */
class Language extends Model
{

	use HasTranslations;

	protected $table = "languages";
	protected $fillable = ['code', 'name'];
	protected array $translatable = ['name'];

	#[ArrayShape(['code' => "string[]", 'name' => "string[]"])]
	public static function getFields(): array
	{
		// field, type, required, placeholder, tip, model for select
		return [
			'code' => ['input', 'text', 'required', 'Slug', 'Enter the code (ISO 2)'],
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
	 * A country has many users...
	 * @return HasMany
	 */
	public function users(): HasMany
	{
		return $this->hasMany(User::class, 'user_id');
	}
}
