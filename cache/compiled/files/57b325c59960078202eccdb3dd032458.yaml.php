<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/terry/Downloads/grav-skeleton-blog-site+admin-2.0 (1).0/user/plugins/social-seo-metatags/social-seo-metatags.yaml',
    'modified' => 1636421012,
    'size' => 406,
    'data' => [
        'enabled' => true,
        'seo' => [
            'robots' => 'without',
            'length' => 20,
            'taxonomy' => [
                'enabled' => true
            ],
            'page_content' => [
                'enabled' => false
            ],
            'breadcrumb' => false
        ],
        'quote' => [
            'convert_simple' => true
        ],
        'image' => [
            'use_cache' => false
        ],
        'social_pages' => [
            'pages' => [
                'twitter' => [
                    'enabled' => true,
                    'type' => 'summary',
                    'username' => ''
                ],
                'facebook' => [
                    'opengraph' => [
                        'enabled' => true
                    ],
                    'insights' => [
                        'enabled' => false,
                        'appid' => '1234567890'
                    ]
                ]
            ]
        ]
    ]
];
