<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/boro/Http/SPORAA/user/blueprints/admin/pages/new_post.yaml',
    'modified' => 1626563940,
    'data' => [
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'section' => [
                    'type' => 'section',
                    'title' => 'Add Post'
                ],
                'title' => [
                    'type' => 'text',
                    'label' => 'Post Title',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'folder' => [
                    'type' => 'hidden',
                    'default' => '@slugify-title'
                ],
                'route' => [
                    'type' => 'hidden',
                    'default' => '/posts'
                ],
                'name' => [
                    'type' => 'hidden',
                    'default' => 'post'
                ],
                'visible' => [
                    'type' => 'hidden',
                    'default' => ''
                ],
                'blueprint' => [
                    'type' => 'blueprint'
                ]
            ]
        ]
    ]
];
