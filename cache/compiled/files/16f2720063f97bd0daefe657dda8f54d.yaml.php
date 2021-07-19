<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'themes://sporspora/sporspora.yaml',
    'modified' => 1626613881,
    'data' => [
        'streams' => [
            'schemes' => [
                'theme' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://themes/sporspora',
                            1 => 'user://themes/quark'
                        ]
                    ]
                ]
            ]
        ],
        'enabled' => true,
        'production-mode' => true,
        'grid-size' => 'grid-lg',
        'header-fixed' => true,
        'header-animated' => true,
        'header-dark' => false,
        'header-transparent' => false,
        'sticky-footer' => true,
        'blog-page' => NULL,
        'spectre' => [
            'exp' => false,
            'icons' => false
        ],
        'custom_logo' => [
            0 => [
                'name' => 'logo.svg'
            ]
        ],
        'custom_logo_mobile' => [
            0 => [
                'name' => 'logo_bianco.svg'
            ]
        ]
    ]
];
