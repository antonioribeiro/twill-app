<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class Author extends Model implements Sortable
{
    use HasBlocks, HasTranslation, HasSlug, HasMedias, HasFiles, HasRevisions, HasPosition;

    protected $fillable = [
        'published',
        'name',
        'bio',
        'birthday',
        'featured',
        'position',
        'public',
        'publish_start_date',
        'publish_end_date',
    ];

    protected $casts = [
        'featured' => 'boolean',
    ];

    // uncomment and modify this as needed if you use the HasTranslation trait
    public $translatedAttributes = ['active', 'bio'];

    // uncomment and modify this as needed if you use the HasSlug trait
    public $slugAttributes = ['name'];

    // add checkbox fields names here (published toggle is itself a checkbox)
    public $checkboxes = ['published'];

    // uncomment and modify this as needed if you use the HasMedias trait
    public $mediasParams = [
        'avatar' => [
            'default' => [
                [
                    'name' => 'landscape',
                    'ratio' => 16 / 9,
                ],
                [
                    'name' => 'portrait',
                    'ratio' => 3 / 4,
                ],
            ],
            'mobile' => [
                [
                    'name' => 'mobile',
                    'ratio' => 1,
                ],
            ],
        ],
    ];
}
