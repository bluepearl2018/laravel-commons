<?php

namespace Eutranet\Commons\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use JetBrains\PhpStorm\ArrayShape;
use Florbela\Users\Models\UserAsset;

/**
 * Car Class is to describe and save cars with model, etc.
 * Cars, like, othe kind of assets (Asset::class), are 'asssetables"
 */
class Car extends Model
{
	protected $table = "cars";
	protected $fillable = [
		'asset_category_id',
		'car_brand_id',
		'name'
	];

	#[ArrayShape(['asset_category_id' => "string[]", 'car_brand_id' => "string[]", 'name' => "string[]"])]
	public static function getFields(): array
	{
		return [
			'asset_category_id' => ['select', 'list', 'required', 'Asset Category', 'Pick asset category', 'App\Models\Commons\AssetCategory'],
			'car_brand_id' => ['select', 'list', 'required', 'Car brand', 'Pick a car brand', 'App\Models\Commons\CarBrand'],
			'name' => ['input', 'text', 'required', 'Name / Model', 'Enter the car model / car name']
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
	 * Car can be associated to many user assets
	 *
	 * @return BelongsTo
	 */
	public function carBrand(): BelongsTo
	{
		return $this->belongsTo(CarBrand::class);
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

	/**
	 * A car belongs to an asset category (vehicles)
	 *
	 * @return BelongsTo
	 */
	public function assetCategory(): BelongsTo
	{
		return $this->belongsTo(AssetCategory::class);
	}
}