<?php

namespace App\Models\Translations;

use A17\Twill\Models\Model;

class AuthorTranslation extends Model
{
    protected $fillable = [
        'bio',
        'active',
        'locale',
    ];

    protected $casts = ['active' => 'boolean'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
