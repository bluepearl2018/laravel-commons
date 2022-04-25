<?php

namespace Eutranet\Commons\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes as SoftDeletes;
use JetBrains\PhpStorm\ArrayShape;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Translatable\HasTranslations;

/**
 * Please note Asset Category does reference CARS and VEHICLES
 */
class AssetCategory extends Model implements HasMedia
{
	use HasTranslations;
	use InteractsWithMedia;
	use HasFactory;
	use HasRoles;
	use SoftDeletes;

	protected $table = "asset_categories";
	protected $fillable = ['code', 'name', 'description'];
	protected array $translatable = ['name', 'description'];

	#[ArrayShape(['code' => "string[]", 'name' => "string[]", 'description' => "string[]"])]
	public static function getFields(): array
	{
		// field, type, required, placeholder, tip, model for select, readonly
		return [
			'code' => ['input', 'text', 'required', 'Code', 'DO NOT MODIFY existing code, unless you know what you are doing, beacause Asset Category calls ad hoc forms blades...'],
			'name' => ['input', 'text', 'required', 'Name', 'Enter the name'],
			'description' => ['input', 'textarea', 'optional', 'Description', 'Enter the description'],
		];
	}

	public static function getClassLead(): string
	{
		return trans('asset-categories.class-lead') . ' ' .'An asset is a resource owned or controlled by an individual, corporation, or government with the expectation that it will generate a positive economic benefit. Common types of assets include current, non-current, physical, intangible, operating, and non-operating. Correctly identifying and classifying the types of assets is critical to the survival of a company, specifically its solvency and associated risks.';
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
	 * An asset category is linked to many assets with asset_category_id
	 *
	 * @return HasMany
	 */
	public function assets(): HasMany
	{
		return $this->hasMany(Asset::class);
	}

	/**
	 * An asset category is linked to many cars thanks to asset_category_id
	 * NOT SURE THIS WORKS... Else with scope ??
	 *
	 * @return HasMany
	 */
	public function cars(): HasMany
	{
		return $this->hasMany(Car::class, 'asset_category_id');
	}
}
