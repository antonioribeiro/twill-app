<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class AuthorController extends ModuleController
{
    protected $moduleName = 'authors';

    protected $titleColumnKey = 'name';

    protected $indexOptions = [
        'create' => true,
        'edit' => true,
        'publish' => true,
        'bulkPublish' => true,
        'feature' => true,
        'bulkFeature' => false,
        'restore' => true,
        'bulkRestore' => true,
        'delete' => true,
        'bulkDelete' => true,
        'reorder' => true,
        'permalink' => true,
        'bulkEdit' => true,
        'editInModal' => false,
    ];

    protected $indexColumns = [
        'avatar' => [
            'thumb' => true,

            'variant' => [
                'role' => 'featured',
                'crop' => 'default',
            ],
        ],

        'name' => [
            'field' => 'name',
            'title' => 'Name',
            'sort' => true,
            'visible' => true,
        ],

        'birthday' => [
            'field' => 'birthday',
            'title' => 'Birth day',
            'sort' => true,
        ],
    ];

    protected function previewData($item)
    {

        return [
            'project' => $item,
            'setting_name' => $settingRepository->byKey('setting_name')
        ];
    }
}
