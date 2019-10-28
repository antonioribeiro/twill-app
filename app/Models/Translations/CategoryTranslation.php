<?php

namespace App\Models\Translations;

use A17\Twill\Models\Model;

class CategoryTranslation extends Model
{
    protected $fillable = [
        'title',
        'description',
        'active',
        'locale',
    ];

    protected $casts = ['active' => 'boolean'];
}
