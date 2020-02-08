<?php

return [
    'namespace' => 'App',
//    'admin_app_url' => env('ADMIN_APP_URL'),
//    'admin_app_path' => env('ADMIN_APP_PATH'),
//    'admin_middleware_group' => 'web',
//    'bind_exception_handler' => false,
//    'users_table' => 'twill_users',
//    'password_resets_table' => 'twill_password_resets',
    'auth_login_redirect_path' => '/'.env('ADMIN_APP_PATH'),
    'enabled' => [
        'users-management' => true,
        'media-library' => true,
        'file-library' => true,
        'dashboard' => true,
        'search' => true,
        'block-editor' => true,
        'buckets' => true,
        'users-image' => false,
        'users-description' => false,
        'site-link' => false,
        'settings' => false,
        'activitylog' => true,
        'users-2fa' => true,
    ],
    'block_editor' => [
        'block_single_layout' => 'site.layouts.block',
        'block_views_path' => 'site.blocks',
        'block_views_mappings' => [],
        'block_preview_render_childs' => true,
        'blocks' => [
            'quote' => [
                'title' => 'Quote',
                'icon' => 'text',
                'component' => 'a17-block-quote',
            ],
//            'text' => [
//                'title' => 'Body text',
//                'icon' => 'text',
//                'component' => 'a17-block-wysiwyg',
//            ],
//            'image' => [
//                'title' => 'Image',
//                'icon' => 'image',
//                'component' => 'a17-block-image',
//            ],
        ],
        'crops' => [
            'avatar' => [
                'default' => [
                    [
                        'name' => 'default',
                        'ratio' => 1 / 1,
                        'minValues' => [
                            'width' => 100,
                            'height' => 100,
                        ],
                    ],
                ],
            ],
        ],
    ],
    'imgix' => [
        'default_params' => [
            'fm' => 'jpg',
            'q' => '80',
            'auto' => 'compress,format',
            'fit' => 'min',
        ],
        'lqip_default_params' => [
            'fm' => 'gif',
            'auto' => 'compress',
            'blur' => 100,
            'dpr' => 1,
        ],
        'social_default_params' => [
            'fm' => 'jpg',
            'w' => 900,
            'h' => 470,
            'fit' => 'crop',
            'crop' => 'entropy',
        ],
        'cms_default_params' => [
            'q' => 60,
            'dpr' => 1,
        ],
        'source_host' => env('IMGIX_SOURCE_HOST'),
        'use_https' => env('IMGIX_USE_HTTPS', true),
        'use_signed_urls' => env('IMGIX_USE_SIGNED_URLS', false),
        'sign_key' => env('IMGIX_SIGN_KEY'),
    ],
    'file_library' => [
        'disk' => env('MEDIA_LIBRARY_DISK', 'libraries'),
        'endpoint_type' => 'local',
        'cascade_delete' => env('FILE_LIBRARY_CASCADE_DELETE', false),
        'local_path' => env('FILE_LIBRARY_LOCAL_PATH'),
        'file_service' => env('FILE_LIBRARY_FILE_SERVICE', 'A17\Twill\Services\FileLibrary\Disk'),
        'acl' => env('FILE_LIBRARY_ACL', 'public-read'),
        'filesize_limit' => env('FILE_LIBRARY_FILESIZE_LIMIT', 50),
        'allowed_extensions' => [],
    ],
//    'glide' => [
//        'source' => env('GLIDE_SOURCE', storage_path('app/public/' . config('twill.media_library.local_path'))),
//        'cache' => env('GLIDE_CACHE', storage_path('app')),
//        'cache_path_prefix' => env('GLIDE_CACHE_PATH_PREFIX', 'glide_cache'),
//        'base_url' => env('GLIDE_BASE_URL'),
//        'base_path' => env('GLIDE_BASE_PATH', 'img'),
//        'use_signed_urls' => env('GLIDE_USE_SIGNED_URLS', false),
//        'sign_key' => env('GLIDE_SIGN_KEY'),
//        'default_params' => [
//            'fm' => 'jpg',
//            'q' => '80',
//            'fit' => 'max',
//        ],
//        'lqip_default_params' => [
//            'fm' => 'gif',
//            'blur' => 100,
//            'dpr' => 1,
//        ],
//        'social_default_params' => [
//            'fm' => 'jpg',
//            'w' => 900,
//            'h' => 470,
//            'fit' => 'crop',
//        ],
//        'cms_default_params' => [
//            'q' => '60',
//            'dpr' => '1',
//        ],
//        'presets' => []
//    ],

    'dashboard' => [
        'modules' => [
            'authors' => [
                'name' => 'authors', // module name
                'label' => 'authors', // optional, if the name of your module above does not work as a label
                'label_singular' => 'author', // optional, if the automated singular version of your name/label above does not work as a label
                'routePrefix' => 'personnel', // optional, if the module is living under a specific routes group
                'count' => true, // show total count with link to index of this module
                'create' => true, // show link in create new dropdown
                'activity' => true, // show activities on this module in actities list
                'draft' => true, // show drafts of this module for current user
                'search' => true, // show results for this module in global search
                'search_fields' => ['name'],
            ],

            'categories' => [
                'name' => 'categories', // module name
                'label' => 'categories', // optional, if the name of your module above does not work as a label
                'label_singular' => 'category', // optional, if the automated singular version of your name/label above does not work as a label
                'routePrefix' => '', // optional, if the module is living under a specific routes group
                'count' => true, // show total count with link to index of this module
                'create' => true, // show link in create new dropdown
                'activity' => true, // show activities on this module in actities list
                'draft' => true, // show drafts of this module for current user
                'search' => true, // show results for this module in global search
            ],
        ],
        'analytics' => ['enabled' => false],
        'search_endpoint' => 'admin.search',
    ]
];
