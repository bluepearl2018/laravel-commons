<?php

namespace Eutranet\Commons\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Eutranet\Commons\Models\MaritalStatus;
use Eutranet\Commons\Models\MatrimonialRegime;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		if (\Schema::hasTable('appellatives')) {
			$this->call(AppellativeSeeder::class);
		}
		if (\Schema::hasTable('asset_categories')) {
			$this->call(AssetCategorySeeder::class);
		}
		if (\Schema::hasTable('car_brands')) {
			$this->call(CarBrandSeeder::class);
		}
		if (\Schema::hasTable('cars')) {
			$this->call(CarSeeder::class);
		}
		if (\Schema::hasTable('countries')) {
			$this->call(CountrySeeder::class);
		}
		if (\Schema::hasTable('genders')) {
			$this->call(GenderSeeder::class);
		}
		if (\Schema::hasTable('kinships')) {
			$this->call(KinshipSeeder::class);
		}
		if (\Schema::hasTable('languages')) {
			$this->call(LanguageSeeder::class);
		}
		if (\Schema::hasTable('marital_statuses')) {
			$this->call(MaritalStatusSeeder::class);
		}
		if (\Schema::hasTable('matrimonial_regimes')) {
			$this->call(MatrimonialRegimeSeeder::class);
		}
		if (\Schema::hasTable('media_collections')) {
			$this->call(MediaCollectionSeeder::class);
		}
		if (\Schema::hasTable('stabilities')) {
			$this->call(StabilitySeeder::class);
		}
		if (\Schema::hasTable('user_statuses')) {
			$this->call(UserStatusSeeder::class);
		}
		if (\Schema::hasTable('work_regimes')) {
			$this->call(WorkRegimeSeeder::class);
		}
		if (\Schema::hasTable('work_statuses')) {
			$this->call(WorkStatusSeeder::class);
		}
	}
}
