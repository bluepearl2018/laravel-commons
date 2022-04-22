<?php

namespace Eutranet\Commons\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Schema;
use Eutranet\Commons\Models\AssetCategory;
use Eutranet\Commons\Models\Appellative;

class AssetCategorySeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		$assetCategoriesArray =
			[
				[
					'id' => '1',
					'asset_category_id' => NULL,
					'code' => 'real-estate',
					'name' => '{"en":"Real Estate", "fr":"Immobilier", "pt":"Imoveis"}'
				],
				[
					'id' => '2',
					'asset_category_id' => NULL,
					'code' => 'vehicles',
					'name' => '{"en":"Vehicles", "fr":"Véhicules", "pt":"Viaturas"}'
				],
				[
					'id' => '3',
					'asset_category_id' => NULL,
					'code' => 'domestic-equipments',
					'name' => '{"en":"Domestic equipments", "fr":"Équipements domestiques", "pt":"Equipamentos domesticos"}'
				],
				[
					'id' => '4',
					'asset_category_id' => NULL,
					'code' => 'fixed-tangibles-assets',
					'name' => '{"en":"Fixed Tangible Assets", "fr":"Immobilisations corporelles", "pt":"Activos fixos"}'
				],
				[
					'id' => '5',
					'asset_category_id' => NULL,
					'code' => 'other-assets',
					'name' => '{"en":"Other assets", "fr":"Autres actifs", "pt":"Outros activos"}'
				],
			];

		if (AssetCategory::count() < 1) {
			foreach ($assetCategoriesArray as $l) {
				DB::table('asset_categories')->insert(
					$l
				);
			}
		}

	}
}
