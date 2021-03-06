<?php

namespace Eutranet\Commons\Models;

use Illuminate\Database\Eloquent\Model;
use JetBrains\PhpStorm\ArrayShape;
use Spatie\Translatable\HasTranslations;

/**
 * Stability is to describe and save revenue stability level
 * Stored in DB cos of translation requirements
 */
class Stability extends Model
{
    use HasTranslations;

    protected $table = 'stabilities';

    protected $fillable = [
        'code',
        'name',
        'description'
    ];

    protected array $translatable = [
        'name',
        'description'
    ];

    #[ArrayShape(['code' => "string[]", 'name' => "string[]", 'description' => "string[]"])]
    public static function getFields(): array
    {
        return [
            'code' => ['input', 'text', 'required', trans('media-collectionsCode'), trans('media-collectionsEnter a code')],
            'name' => ['input', 'text', 'required', trans('media-collectionsName'), trans('media-collectionsEnter the name')],
            'description' => ['input', 'textarea', 'optional', trans('media-collectionsDescription'), trans('media-collectionsEnter the description')],
        ];
    }

    public static function getClassLead(): string
    {
        return trans('stabilities.class-lead') . ' ' . 'Stability is the quality of being unchanging...';
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
