<?php

namespace Eutranet\Commons\Models;

use Illuminate\Database\Eloquent\Model;
use JetBrains\PhpStorm\ArrayShape;
use Spatie\Translatable\HasTranslations;
use Spatie\TranslationLoader\LanguageLine;

/**
 * Gender is to describe and save genders
 * Stored in DB cos of translation requirements
 */
class Gender extends Model
{
    use HasTranslations;

	/**
	 * @var string
	 */
	protected $table = "genders";
	/**
	 * @var string[]
	 */
	protected $fillable = ['name', 'name_abbrev'];
	/**
	 * @var array|string[]
	 */
	protected array $translatable = ['name', 'name_abbrev'];

	/**
	 * @return array[]
	 */
	#[ArrayShape(['name_abbrev' => "string[]", 'name' => "string[]"])]
    public static function getFields(): array
    {
        // field, type, required, placeholder, tip, model for select
        return [
            'name_abbrev' => ['input', 'text', 'required', trans('genders.Abbrev'), trans('genders.Enter the name abbrev')],
            'name' => ['input', 'text', 'required', trans('genders.Name'), trans('genders.Enter the name')],
        ];
    }

	/**
	 * @return void
	 */
	public static function saveTranslations()
	{
		$lls = array(
			array('group' => 'fields', 'key' => 'gender_id', 'text' => '{"en":"Gender", "pt":"Género"}'),
			array('group' => 'genders', 'key' => 'class-lead', 'text' => '{"en":"Gender is the range of characteristics pertaining to femininity and masculinity and differentiating between them. Most cultures use a gender binary, having two genders (boys/men and girls/women)."}')
		);

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

	/**
	 * @return string
	 */
	public static function getClassLead(): string
    {
        return trans('genders.class-lead');
    }

    /**
     * This static function is essential for the documentation service provider
     * The namespace is saved into doc_models table
     * @return string
     */
    public static function getNamespace(): string
    {
        return __NAMESPACE__;
    }

}
