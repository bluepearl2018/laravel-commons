<?php

namespace Eutranet\Commons\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Eutranet\Commons\Models\Appellative;
use Illuminate\Support\Facades\Schema;
use Spatie\TranslationLoader\LanguageLine;

class LanguageLineSeeder extends Seeder
{
	public array $lls = [
		/**
		 * Warnings
		 */
		array('group' => 'warnings', 'key' => 'NC', 'text' => '{"en":"NC", "pt":"NC"}'),

	];

	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		static::saveTranslations($this->lls);
	}

	public static function saveTranslations($lls)
	{

		if (\Schema::hasTable('language_lines')) {
			foreach ($lls as $ll) {
				if(! LanguageLine::where([
					'group' => $ll['group'],
					'key' => $ll['key']
				])->get()->first())
				{
					LanguageLine::create([
						'group' => $ll['group'],
						'key' => $ll['key'],
						'text' => json_decode($ll['text'], true)
					]);
				};
			}
		}
	}

}