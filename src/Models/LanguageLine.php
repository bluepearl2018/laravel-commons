<?php

namespace Eutranet\Commons\Models;

use JetBrains\PhpStorm\ArrayShape;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;

/**
 *
 */
class LanguageLine extends Model
{
    use HasTranslations;

    /**
     * @var string
     */
    protected $table = "language_lines";
    protected $fillable = ['group', 'key', 'text'];
    protected array $translatable = ['text'];

    #[ArrayShape(['group' => "string", 'key' => "string", 'text' => "string"])]
    public static function getFields(): array
    {
        return [
            'group' => ['input', 'text', 'required', 'Group', 'Set the group (slugified plural class)'],
            'key' => ['input', 'text', 'required', 'Key', 'Set the key or text.'],
            'text' => ['input', 'textarea', 'required', 'Original text or translation', 'Use deepl.'],
        ];
    }

    public static function getClassLead(): string
    {
        return trans('language-lines.class-lead');
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
