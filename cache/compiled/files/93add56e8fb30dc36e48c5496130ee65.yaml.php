<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/terry/Downloads/grav-skeleton-blog-site+admin-2.0 (1).0/user/plugins/admin/blueprints/admin/pages/new_folder.yaml',
    'modified' => 1665247182,
    'size' => 527,
    'data' => [
        'rules' => [
            'slug' => [
                'pattern' => '[a-zA-Zа-яA-Я0-9_\\-]+',
                'min' => 1,
                'max' => 200
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'section' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.ADD_FOLDER'
                ],
                'folder' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_ADMIN.FOLDER_NAME',
                    'help' => 'PLUGIN_ADMIN.FOLDER_NAME_HELP',
                    'validate' => [
                        'rule' => 'slug',
                        'required' => true
                    ]
                ],
                'route' => [
                    'type' => 'parents',
                    'label' => 'PLUGIN_ADMIN.PARENT_PAGE',
                    'classes' => 'fancy',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'blueprint' => [
                    'type' => 'blueprint'
                ]
            ]
        ]
    ]
];