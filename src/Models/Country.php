<?php

namespace Eutranet\Commons\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes as SoftDeletes;
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
class Country extends Model
{

	use HasTranslations;
	use SoftDeletes;

	protected $table = "countries";
	protected $fillable = ['code', 'name'];
	protected array $translatable = ['name'];

	#[ArrayShape(['code' => "string[]", 'name' => "string[]"])]
	public static function getFields(): array
	{
		// field, type, required, placeholder, tip, model for select
		return [
			'code' => ['input', 'text', 'required', trans('commons::countries.ISO 2 Code'), trans('commons::countries.Enter the code (ISO 2)'), __NAMESPACE__ . '\\Country'],
			'name' => ['input', 'text', 'required', trans('commons::countries.Name'), trans('commons::countries.Enter the name')],
		];
	}

	public static function getClassLead(): string
	{
		return trans('countries.class-lead') . ' ' . 'A country, or state (sometimes called nation), is a distinct territorial body or political entity.[1] It may be an independent sovereign state or part of a larger state,[2] as a non-sovereign or formerly sovereign political division, a physical territory with a government, or a geographic region associated with sets of previously independent or differently associated peoples with distinct political characteristics. It is not inherently sovereign.';
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
