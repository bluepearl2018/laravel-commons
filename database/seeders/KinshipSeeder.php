<?php

namespace Eutranet\Commons\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Eutranet\Commons\Models\MaritalStatus;
use Eutranet\Commons\Models\MatrimonialRegime;
use Eutranet\Commons\Models\Stability;
use Eutranet\Commons\Models\Kinship;

class KinshipSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{

		$defaultArray = array(
			array(
				'name' => '{"en":"First-degree relative", "fr":"Parent au premier degré", "pt":"Parente do primeiro grau"}',
				'description' => '{"en":"A person\'s mother, father, brother, sister or child is a first degree relative", "fr":"La mère, le père, le frère, la sœur ou un enfant d\'une personne sont des parents au premier degré.", "pt":"A mãe, o pai, o irmão, a irmã ou o filho de uma pessoa é um parente de primeiro grau."}',
			),
			array(
				'name' => '{"en":"Second-degree relative", "fr":"Parent au second degré", "pt":"Parente do segundo grau"}',
				'description' => '{"en":"Aunt, uncle, grandparent, grandchild, niece, nephew or half-brother or half-sister of a person", "fr":"Tante, oncle, grands-parents, petits-enfants, nièce, neveu ou demi-frère ou demi­soeur d’une personne...", "pt": "Tia, tio, avô, neto, sobrinha, sobrinho ou meio-irmão ou meia-irmã de uma pessoa..."}',
			),
			array(
				'name' => '{"en":"Third-degree relative", "fr":"Parent au troisième degré", "pt":"Parente do terceiro grau"}',
				'description' => '{"en":"Great-grandparents, aunts and uncles or nieces and nephews of the individual.", "fr":"Arrière-grand-parents, oncles et tantes ou neveux et nièces de l\'individu.", "pt":"Bisavós, tios e tias ou sobrinhos e sobrinhas do indivíduo."}',
			),
			array(
				'name' => '{"en":"Fourth-degree relative", "fr":"Parent au quatrième degré", "pt":"Parente do quarto grau"}',
				'description' => '{"en":"First cousins of the individual.", "fr":"Cousins et cousines germains de l\'individu.", "pt":"Primeiros primos do indivíduo."}',
			),
		);

		if (Kinship::count() < 1) {
			foreach ($defaultArray as $l) {
				DB::table('kinships')->insert(
					$l
				);
			}
		}
	}
}
