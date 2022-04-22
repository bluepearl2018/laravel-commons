<?php

namespace Eutranet\Commons\Database\Seeders;

use Illuminate\Database\Seeder;
use Eutranet\Commons\Models\MaritalStatus;

class MaritalStatusSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{

		$maritalStatuses = array(
			array(
				'name' => '{"en":"Single", "fr":"Célibataire", "pt":"Solteiro"}',
			),
			array(
				'name' => '{"en":"Married", "fr":"Marié", "pt":"Casado"}',
			),
			array(
				'name' => '{"en":"Divorced", "fr":"Divorcé", "pt":"Divorciado"}',
			),
			array(
				'name' => '{"en":"Widower", "fr":"Veuf, veuve", "pt":"Viúvo"}',
			),
			array(
				'name' => '{"en":"De facto union", "fr":"Union de fait", "pt":"União de facto"}',
			),
		);

		if (MaritalStatus::count() < 1) {
			foreach ($maritalStatuses as $l) {
				\DB::table('marital_statuses')->insert(
					$l
				);
			}
		}

	}
}
