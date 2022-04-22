<?php

namespace Eutranet\Commons\Models;

/**
 *
 */
class LanguageLine extends \Spatie\TranslationLoader\LanguageLine
{

	/**
	 * @var string
	 */
	protected $table = "language_lines";

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
