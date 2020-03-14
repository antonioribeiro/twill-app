<?php

return [
    'personnel' => [
        'title' => 'Personnel',
        'route' => 'admin.personnel.authors.index',
        'primary_navigation' => [
            'authors' => [
                'title' => 'Authors',
                'module' => true,
            ],
        ],
    ],

    'artists' => [
        'title' => 'Artists',
        'module' => true
    ],

    'categories' => [
        'title' => 'Categories',
        'route' => 'admin.categories.index',
    ],

    'photographers' => [
        'title' => 'Photographers',
        'route' => 'admin.photographers.index',
    ],
];
