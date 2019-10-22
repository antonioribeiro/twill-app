<?php

namespace App\Models\Translations;

use A17\Twill\Models\Model;

class AuthorTranslation extends Model
{
    protected $fillable = [
        'name',
        'description',
        'active',
        'locale',
    ];
}