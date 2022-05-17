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
            'code' => ['input', 'text', 'required', trans('media-collections.Code'), trans('media-collections.Enter a code slug')],
            'name' => ['input', 'text', 'required', trans('media-collections.Name'), trans('media-collections.Enter a name')],
            'description' => ['input', 'textarea', 'optional', trans('media-collections.Description'), trans('media-collections.Enter a description')],
            'class_route' => ['input', 'text', 'required', trans('media-collections.Class route'), trans('media-collectionsEnter a class route')],
        ];
    }

    public static function getClassLead(): string
    {
        return trans('media-collections.class-lead') . ' ' . 'Media collections will be registerd in a table in order to be associated with spatie media library collections... A media collection can be more than just a name to group files. By defining a media collection in your model you can add certain behaviour.';
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
