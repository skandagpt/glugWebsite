<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ubuntu/workspace/user/plugins/gravstrap/blueprints.yaml',
    'modified' => 1476642974,
    'data' => [
        'name' => 'Gravstrap',
        'version' => '1.2.2',
        'description' => 'Gravstrap is a Grav plugin that provides Bootstrap components as shortcodes. It has 30+ basic, modules and bootstrap shortcodes',
        'icon' => 'share-alt',
        'author' => [
            'name' => 'Giansimon Diblas',
            'email' => 'info@diblas.net',
            'url' => 'http://diblas.net'
        ],
        'homepage' => 'https://github.com/giansi/gravstrap',
        'demo' => 'http://gravstrap.diblas.net/',
        'keywords' => 'bootstrap, theme',
        'bugs' => 'https://github.com/giansi/gravstrap/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => 'shortcode-core',
            1 => [
                'name' => 'grav',
                'version' => '~1.1'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
