<?php

namespace Eutranet\Commons\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Eutranet\Commons\Models\MaritalStatus;
use Eutranet\Commons\Models\MatrimonialRegime;
use Eutranet\Commons\Models\WorkStatus;
use Eutranet\Commons\Models\Stability;

class StabilitySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $demoArray = array(
            array(
                'code' => 'stable',
                'name' => '{"en":"Stable", "fr":"Stable", "pt":"Estável"}',
                'description' => '{"en":"Is stable", "fr":"Stable", "pt":Situação estável"}',
            ),
            array(
                'code' => 'unstable',
                'name' => '{"en":"Unstable", "fr":"Instable", "pt":"Instável"}',
                'description' => '{"en":"Is unstable", "fr":"Instable", "pt":Situação instável"}',
            ),
        );

        if (Stability::count() < 1) {
            foreach ($demoArray as $l) {
                \DB::table('stabilities')->insert(
                    $l
                );
            }
        }
    }
}
