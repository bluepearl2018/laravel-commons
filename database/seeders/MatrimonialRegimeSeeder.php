<?php

namespace Eutranet\Commons\Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Eutranet\Commons\Models\MaritalStatus;
use Eutranet\Commons\Models\MatrimonialRegime;

class MatrimonialRegimeSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $matrimonialRegimesArray = array(
            array(
                'name' => '{"en":"General Communion", "fr":"Communion des biens", "pt":"Communhão dos bens"}',
            ),
            array(
                'name' => '{"en":"Communhão dos adquiridos", "fr":"Communion réduite aux acquets", "pt":"Communhão dos adquiridos"}',
            ),
            array(
                'name' => '{"en":"Separaçöao de bens", "fr":"Séparation des biens", "pt":"Separação"}',
            ),
            array(
                'name' => '{"en":"Other regime", "fr":"Autres dispositions", "pt":"Outro (especificar)"}',
            ),
        );

        if (MatrimonialRegime::count() < 1) {
            foreach ($matrimonialRegimesArray as $l) {
                \DB::table('matrimonial_regimes')->insert(
                    $l
                );
            }
        }
    }
}
