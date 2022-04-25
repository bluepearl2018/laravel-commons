<?php

namespace Eutranet\Commons\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Spatie\Translatable\HasTranslations;
use Florbela\Users\Models\UserFamily;

/**
 * Kinship is to describe and save kinship degrees
 * Stored in DB cos of translation requirements
 */
class Kinship extends Model
{

	use HasTranslations;

	protected $table = 'kinships';

	protected $fillable = [
		'name',
		'description'
	];

	protected array $translatable = [
		'name',
		'description'
	];

	public static function getClassLead(): string
	{
		return trans('kinships.class-lead') . ' ' . 'In anthropology, kinship is the web of social relationships that form an important part of the lives of all humans in all societies, although its exact meanings even within this discipline are often debated. Anthropologist Robin Fox says that the study of kinship is the study of what humans do with these basic facts of life – mating, gestation, parenthood, socialization, siblingship etc. Human society is unique, he argues, in that we are "working with the same raw material as exists in the animal world, but [we] can conceptualize and categorize it to serve social ends."[1] These social ends include the socialization of children and the formation of basic economic, political and religious groups.';
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

	/**
	 * @return HasMany
	 */
	public function userGuidances(): HasMany
	{
		return $this->hasMany(UserFamily::class);
	}

	/**
	 * @return HasManyThrough
	 */
	public function users(): HasManyThrough
	{
		return $this->hasManyThrough(User::class, UserFamily::class);
	}
}
