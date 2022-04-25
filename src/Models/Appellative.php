<?php

namespace Eutranet\Commons\Models;

use Illuminate\Database\Eloquent\Model;
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
			'name_prefix' => ['input', 'text', 'required', trans('appellatives.Prefix'), trans('appellatives.Enter the name prefix')],
			'name' => ['input', 'text', 'required', trans('appellatives.Name'), trans('appellatives.Enter the name')],
		];
	}

	public static function getClassLead(): string
	{
		return trans('appellatives.class-lead') . ' ' .'A common noun, such as "doctor", "sir", "professor", used as a vocative.';
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

}
