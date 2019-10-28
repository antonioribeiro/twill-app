<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Model;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
    use HasBlocks, HasTranslation, HasSlug, HasMedias, HasFiles, HasRevisions, NodeTrait;

    protected $fillable = ['published', 'position', 'description'];

    // uncomment and modify this as needed if you use the HasTranslation trait
    public $translatedAttributes = ['title', 'active'];

    // uncomment and modify this as needed if you use the HasSlug trait
    public $slugAttributes = ['title'];

    // add checkbox fields names here (published toggle is itself a checkbox)
    public $checkboxes = ['published'];
}
