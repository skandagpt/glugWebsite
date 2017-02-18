<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ubuntu/workspace/user/plugins/bootstrapper/blueprints.yaml',
    'modified' => 1487457991,
    'data' => [
        'name' => 'Bootstrapper',
        'version' => '1.3.2',
        'description' => 'Loads the Bootstrap Framework v3.3.6 assets for any plugin/theme that needs it',
        'icon' => 'bold',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-bootstrapper',
        'demo' => 'http://demo.getgrav.org/bootstrap-skeleton/',
        'keywords' => 'bootstrap, css, plugin, framework',
        'bugs' => 'https://github.com/getgrav/grav-plugin-bootstrapper/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'always_load' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_BOOTSTRAPPER.ALWAYS_LOAD',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'PLUGIN_BOOTSTRAPPER.ALWAYS_LOAD_HELP'
                ],
                'use_cdn' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_BOOTSTRAPPER.USE_CDN',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'PLUGIN_BOOTSTRAPPER.USE_CDN_HELP'
                ],
                'mode' => [
                    'type' => 'select',
                    'size' => 'small',
                    'label' => 'PLUGIN_BOOTSTRAPPER.MODE',
                    'default' => 'production',
                    'options' => [
                        'development' => 'Development',
                        'production' => 'Production'
                    ]
                ],
                'load_core_css' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_BOOTSTRAPPER.LOAD_CORE_CSS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'load_theme_css' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_BOOTSTRAPPER.LOAD_THEME_CSS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'load_core_js' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_BOOTSTRAPPER.LOAD_CORE_JS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
