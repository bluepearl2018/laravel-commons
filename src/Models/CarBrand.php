<?php

namespace Eutranet\Commons\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use JetBrains\PhpStorm\ArrayShape;
use Florbela\Users\Models\UserAsset;

/**
 * Car brands is to describe and save car brands
 */
class CarBrand extends Model
{
	protected $table = "car_brands";
	protected $fillable = ['name'];

	#[ArrayShape(['name' => "string[]"])]
	public static function getFields(): array
	{
		return [
			'name' => ['input', 'text', 'required', 'Name', 'Enter the name'],
		];
	}

	public static function getClassLead(): string
	{
		return trans('car-brands.class-lead') . ' ' .'More info about car brands here --> https://en.wikipedia.org/wiki/List_of_car_brands';
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
	 * Car Brands have many cars
	 *
	 * @return HasMany
	 */
	public function cars(): HasMany
	{
		return $this->hasMany(Car::class);
	}

	/**
	 * Car can be associated to many user assets
	 *
	 * @return MorphMany
	 */
	public function userAssets(): MorphMany
	{
		return $this->morphMany(UserAsset::class, 'assetable');
	}
}
