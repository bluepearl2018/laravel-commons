<?php

namespace Eutranet\Commons\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Eutranet\Commons\Models\MaritalStatus;
use Eutranet\Commons\Models\MatrimonialRegime;
use Eutranet\Commons\Models\WorkStatus;

class WorkStatusSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		$workStatuses =
			[
				[
					'id' => '1',
					'name' => '{"en":"Unemployed", "fr":"Sans emploi", "pt":"Desempregado/Desempregada"}'
				],
				[
					'id' => '2',
					'name' => '{"en":"Retired", "fr":"Retraité(e)", "pt":"Reformado/Reformada"}'
				],
				[
					'id' => '3',
					'name' => '{"en":"Active", "fr":"Actif/Active", "pt":"Ativo/Ativa"}'
				],
			];

		if (WorkStatus::count() < 1) {
			foreach ($workStatuses as $l) {
				\DB::table('work_statuses')->insert(
					$l
				);
			}
		}
	}
}
