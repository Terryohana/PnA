<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/terry/Downloads/grav-skeleton-blog-site+admin-2.0 (1).0/user/plugins/feed/blueprints/feed.yaml',
    'modified' => 1665247173,
    'size' => 447,
    'data' => [
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'blog' => [
                            'type' => 'tab',
                            'fields' => [
                                'header.feed.limit' => [
                                    'type' => 'text',
                                    'label' => 'Feed count',
                                    'default' => 10,
                                    'validate' => [
                                        'type' => 'int'
                                    ]
                                ],
                                'header.feed.title' => [
                                    'type' => 'text',
                                    'label' => 'Feed title'
                                ],
                                'header.feed.description' => [
                                    'type' => 'text',
                                    'label' => 'Feed description'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
