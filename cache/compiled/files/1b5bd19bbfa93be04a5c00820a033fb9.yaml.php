<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/terry/Downloads/grav-skeleton-blog-site+admin-2.0 (1).0/user/plugins/flex-objects/blueprints/flex-objects.yaml',
    'modified' => 1665247182,
    'size' => 338,
    'data' => [
        'type' => 'flex-objects',
        'form' => [
            'fields' => [
                'tools_section' => [
                    'type' => 'section',
                    'field_classes' => 'overlay bottom',
                    'fields' => [
                        '_post_entries_save' => [
                            'label' => 'PLUGIN_FLEX_OBJECTS.AFTER_SAVE',
                            'type' => 'save-redirect',
                            'default' => 'create-new'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
