<?php

namespace Webkul\CMS\Models;

use Illuminate\Database\Eloquent\Model;
//use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Webkul\CMS\Contracts\CmsPageTranslation as CmsPageTranslationContract;

class CmsPageTranslation extends Model implements CmsPageTranslationContract
{
//    use InteractsWithMedia;
    public $timestamps = false;

    protected $fillable = [
        'page_title',
        'logo',
        'url_key',
        'slider_image1',
        'slider_image2',
        'slider_image3',
        'html_content',
        'content',
        'info_image1',
        'info_image2',
        'info_image3',
        'info_image4',
        'info_image5',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'locale',
        'cms_page_id',
    ];
}