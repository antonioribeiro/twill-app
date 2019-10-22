<?php

return [
    'namespace' => 'App',
    'admin_app_url' => '',
    'admin_app_path' => 'twill',
    'admin_middleware_group' => 'web',
    'bind_exception_handler' => false,
    'users_table' => 'twill_users',
    'password_resets_table' => 'twill_password_resets',
    'auth_login_redirect_path' => '/twill',
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
            'image' => [
                'desktop' => [
                    [
                        'name' => 'desktop',
                        'ratio' => 16 / 9,
                        'minValues' => [
                            'width' => 100,
                            'height' => 100,
                        ],
                    ],
                ],
                'tablet' => [
                    [
                        'name' => 'tablet',
                        'ratio' => 4 / 3,
                        'minValues' => [
                            'width' => 100,
                            'height' => 100,
                        ],
                    ],
                ],
                'mobile' => [
                    [
                        'name' => 'mobile',
                        'ratio' => 1,
                        'minValues' => [
                            'width' => 100,
                            'height' => 100,
                        ],
                    ],
                ],
            ],
        ],
    ],
    'media_library' => [
        'disk' => 'libraries',
        'endpoint_type' => 'local',
        'cascade_delete' => env('MEDIA_LIBRARY_CASCADE_DELETE', false),
        'local_path' => env('MEDIA_LIBRARY_LOCAL_PATH'),
        'image_service' => env('MEDIA_LIBRARY_IMAGE_SERVICE', 'A17\Twill\Services\MediaLibrary\Imgix'),
        'acl' => env('MEDIA_LIBRARY_ACL', 'private'),
        'filesize_limit' => env('MEDIA_LIBRARY_FILESIZE_LIMIT', 50),
        'allowed_extensions' => ['svg', 'jpg', 'gif', 'png', 'jpeg'],
        'init_alt_text_from_filename' => true,
        'translated_form_fields' => false,
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
        'disk' => 'libraries',
        'endpoint_type' => 'local',
        'cascade_delete' => env('FILE_LIBRARY_CASCADE_DELETE', false),
        'local_path' => env('FILE_LIBRARY_LOCAL_PATH'),
        'file_service' => env('FILE_LIBRARY_FILE_SERVICE', 'A17\Twill\Services\FileLibrary\Disk'),
        'acl' => env('FILE_LIBRARY_ACL', 'public-read'),
        'filesize_limit' => env('FILE_LIBRARY_FILESIZE_LIMIT', 50),
        'allowed_extensions' => [],
    ],
    'glide' => [
        'source' => env('GLIDE_SOURCE', storage_path('app/public/' . config('twill.media_library.local_path'))),
        'cache' => env('GLIDE_CACHE', storage_path('app')),
        'cache_path_prefix' => env('GLIDE_CACHE_PATH_PREFIX', 'glide_cache'),
        'base_url' => env('GLIDE_BASE_URL'),
        'base_path' => env('GLIDE_BASE_PATH', 'img'),
        'use_signed_urls' => env('GLIDE_USE_SIGNED_URLS', false),
        'sign_key' => env('GLIDE_SIGN_KEY'),
        'default_params' => [
            'fm' => 'jpg',
            'q' => '80',
            'fit' => 'max',
        ],
        'lqip_default_params' => [
            'fm' => 'gif',
            'blur' => 100,
            'dpr' => 1,
        ],
        'social_default_params' => [
            'fm' => 'jpg',
            'w' => 900,
            'h' => 470,
            'fit' => 'crop',
        ],
        'cms_default_params' => [
            'q' => '60',
            'dpr' => '1',
        ],
        'presets' => []
    ],
];
