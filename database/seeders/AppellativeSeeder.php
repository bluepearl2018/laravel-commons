<?php

namespace Eutranet\Commons\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Eutranet\Commons\Models\Appellative;
use Illuminate\Support\Facades\Schema;

class AppellativeSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id' => '1',
                'name' => '{"en":"Mister", "fr":"Monsieur", "pt":"Senhor"}',
                'name_prefix' => '{"en":"Mr", "fr":"M.", "pt":"Sr"}',
                'created_at' => null,
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'id' => '2',
                'name' => '{"en":"Misses", "fr":"Madame", "pt":"Senhora"}',
                'name_prefix' => '{"en":"Mrs", "fr":"Mme", "pt":"Sra"}',
                'created_at' => null,
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'id' => '3',
                'name' => '{"en":"Engineer", "fr":"Ingénieur", "pt":"Sr. Engenheiro"}',
                'name_prefix' => '{"en":"Eng.", "fr":"Ing.", "pt":"Sr. Eng."}',
                'created_at' => null,
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'id' => '4',
                'name' => '{"en":"Engineer", "fr":"Ing.", "pt":"Sra. Engenheira"}',
                'name_prefix' => '{"en":"Eng.", "fr":"Ing.", "pt":"Sa. Eng."}',
                'created_at' => null,
                'updated_at' => null,
                'deleted_at' => null,
            ],
        ];

        if (Appellative::count() < 1) {
            DB::table('appellatives')->insert(
                $users
            );
        }
    }
}
