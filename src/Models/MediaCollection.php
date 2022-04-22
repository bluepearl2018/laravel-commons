<?php

namespace Eutranet\Commons\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * Credit Type is to describe and save credit types
 * Orignates from FB.OL Mess project...
 */
class MediaCollection extends Model
{
	use HasTranslations;

	protected $table = "media_collections";
	protected $fillable = ['code', 'name', 'description', 'class_route'];
	protected array $translatable = ['name', 'description'];

	public static function getFields()
	{
		return [
			'code' => ['input', 'text', 'required', 'Code', 'Enter a code slug'],
			'name' => ['input', 'text', 'required', 'Name', 'Enter a name'],
			'description' => ['input', 'textarea', 'optional', 'Description', 'Enter a description'],
			'class_route' => ['input', 'text', 'required', 'Class route', 'Enter a class route'],
		];
	}

	public static function getClassLead(): string
	{
		return '';
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
