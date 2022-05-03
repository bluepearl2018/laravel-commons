<?php

namespace Eutranet\Commons\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Eutranet\Commons\Models\MaritalStatus;
use Eutranet\Commons\Models\MatrimonialRegime;
use Eutranet\Commons\Models\WorkStatus;
use Eutranet\Commons\Models\WorkRegime;

class WorkRegimeSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $workRegimesArray = array(
            array(
                'name' => '{"en":"Self-employed", "fr":"A mon compte", "pt":"Conta propria"}',
            ),
            array(
                'name' => '{"en":"Open-ended contract", "fr":"Contrat à durée indéterminée", "pt":"Efetivo"}',
            ),
            array(
                'name' => '{"en":"Fixed term", "fr":"Contrat temporaire", "pt":"Prazo"}',
            ),
            array(
                'name' => '{"en":"Other work regime", "fr":"Autre régime", "pt":"Outro regime"}',
            )
        );

        if (WorkRegime::count() < 1) {
            foreach ($workRegimesArray as $l) {
                DB::table('work_regimes')->insert(
                    $l
                );
            }
        }
    }
}
