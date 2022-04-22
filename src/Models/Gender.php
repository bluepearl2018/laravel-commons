<?php

namespace Eutranet\Commons\Models;

use Illuminate\Database\Eloquent\Model;
use JetBrains\PhpStorm\ArrayShape;
use Spatie\Translatable\HasTranslations;

/**
 * Gender is to describe and save genders
 * Stored in DB cos of translation requirements
 */
class Gender extends Model
{

	use HasTranslations;

	protected $table = "genders";
	protected $fillable = ['name', 'name_abbrev'];
	protected array $translatable = ['name', 'name_abbrev'];

	#[ArrayShape(['name_abbrev' => "string[]", 'name' => "string[]"])]
	public static function getFields(): array
	{
		// field, type, required, placeholder, tip, model for select
		return [
			'name_abbrev' => ['input', 'text', 'required', 'Abbrev', 'Enter the name abbrev'],
			'name' => ['input', 'text', 'required', 'Name', 'Enter the name'],
		];
	}

	public static function getClassLead(): string
	{
		return "Gender is the range of characteristics pertaining to femininity and masculinity 
		and differentiating between them. Depending on the context, this may include sex-based social 
		structures (i.e. gender roles) and gender identity.[1][2][3] Most cultures use a gender binary, 
		having two genders (boys/men and girls/women);[4][5][6] those who exist outside these groups may 
		fall under the umbrella term non-binary. Some societies have specific genders besides \"man\" and \"woman\", 
		such as the hijras of South Asia; these are often referred to as third genders (and fourth genders, etc.). 
		Most scholars agree that gender is a central characteristic for social organization";
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
