<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ubuntu/workspace/user/plugins/ganalytics/blueprints.yaml',
    'modified' => 1487787353,
    'data' => [
        'name' => 'Google Analytics',
        'version' => '1.2.0',
        'description' => 'Google Analytics plugin lets you easyly embed the GA tracking to the Grav website.',
        'icon' => 'google',
        'author' => [
            'name' => 'John Linhart',
            'email' => 'admin@escope.cz',
            'url' => 'http://johnlinhart.com'
        ],
        'homepage' => 'https://github.com/escopecz/grav-ganalytics',
        'keywords' => 'google, plugin, tracking, analytics, grav',
        'bugs' => 'https://github.com/escopecz/grav-ganalytics/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'Basics' => [
                    'type' => 'section',
                    'title' => 'Basics',
                    'underline' => false
                ],
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin Status',
                    'hightlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'trackingId' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Tracking ID',
                    'placeholder' => 'UA-...',
                    'help' => 'Google Analytics tracking ID. In format UA-00000000-0'
                ],
                'Advanced' => [
                    'type' => 'section',
                    'title' => 'Advanced',
                    'underline' => true
                ],
                'anonymizeIp' => [
                    'type' => 'toggle',
                    'label' => 'IP Anonymization',
                    'hightlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Anonymize the IP address for all hits'
                ],
                'renameGa' => [
                    'type' => 'text',
                    'label' => 'Renaming the Global (ga) Object',
                    'size' => 'small',
                    'placeholder' => 'ga',
                    'help' => 'In some cases you have to rename the ga variable'
                ],
                'Debug' => [
                    'type' => 'section',
                    'title' => 'Debug',
                    'underline' => true
                ],
                'debugStatus' => [
                    'type' => 'toggle',
                    'label' => 'Debug Status',
                    'hightlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'debugTrace' => [
                    'type' => 'toggle',
                    'label' => 'Trace Debugging',
                    'hightlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Enabling trace debugging will output more verbose information to the console'
                ]
            ]
        ]
    ]
];
