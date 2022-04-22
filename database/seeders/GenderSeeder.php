<?php

namespace Eutranet\Commons\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Eutranet\Commons\Models\MaritalStatus;
use Eutranet\Commons\Models\MatrimonialRegime;
use Eutranet\Commons\Models\Kinship;
use Eutranet\Commons\Models\Gender;
use Eutranet\Commons\Models\Country;

class GenderSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{

		$gendersArray = array(
			array(
				'name' => '{"en":"Male", "fr":"Homme", "pt":"Homem"}',
				'name_abbrev' => '{"en":"M", "fr":"H", "pt":"H"}'
			),
			array(
				'name' => '{"en":"Female", "fr":"Femme", "pt":"Mulher"}',
				'name_abbrev' => '{"en":"F", "fr":"F", "pt":"M"}'
			),
			array(
				'name' => '{"en":"Transgender", "fr":"Transgenre", "pt":"Transgênero"}',
				'name_abbrev' => '{"en":"T", "fr":"T", "pt":"T"}'
			),
		);
		if (Gender::count() < 1) {
			foreach ($gendersArray as $l) {
				DB::table('genders')->insert(
					$l
				);
			}
		}
	}
}
