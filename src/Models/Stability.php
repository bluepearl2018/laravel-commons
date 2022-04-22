<?php

namespace Eutranet\Commons\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use JetBrains\PhpStorm\ArrayShape;
use Spatie\Translatable\HasTranslations;
use Florbela\Users\Models\UserEmployment;

/**
 * Stability is to describe and save revenue stability level
 * Stored in DB cos of translation requirements
 */
class Stability extends Model
{

	use HasTranslations;

	protected $table = 'stabilities';

	protected $fillable = [
		'code',
		'name',
		'description'
	];

	protected array $translatable = [
		'name',
		'description'
	];

	#[ArrayShape(['code' => "string[]", 'name' => "string[]", 'description' => "string[]"])]
	public static function getFields(): array
	{
		return [
			'code' => ['input', 'text', 'required', 'Code', 'Enter a code'],
			'name' => ['input', 'text', 'required', 'Name', 'Enter the name'],
			'description' => ['input', 'textarea', 'optional', 'Description', 'Enter the description'],
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
	 * @return HasMany
	 */
	public function userEmployments(): HasMany
	{
		return $this->hasMany(UserEmployment::class);
	}
}
