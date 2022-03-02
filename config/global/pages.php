<?php

return [
    '' => [
        'title'       => 'Dashboard',
        'description' => '',
        'view'        => 'index',
        'layout'      => [
            'page-title' => [
                'description' => true,
                'breadcrumb'  => false,
            ],
        ],
        'assets'      => [
            'custom' => [
                'js' => [],
            ],
        ],
    ],

    'login'           => [
        'title'  => 'Login',
        'assets' => [
            'custom' => [
                'js' => [
                    'js/custom/authentication/sign-in/general.js',
                ],
            ],
        ],
        'layout' => [
            'main' => [
                'type' => 'blank', // Set blank layout
                'body' => [
                    'class' => theme()->isDarkMode() ? '' : 'bg-body',
                ],
            ],
        ],
    ],
    'register'        => [
        'title'  => 'Register',
        'assets' => [
            'custom' => [
                'js' => [
                    'js/custom/authentication/sign-up/general.js',
                ],
            ],
        ],
        'layout' => [
            'main' => [
                'type' => 'blank', // Set blank layout
                'body' => [
                    'class' => theme()->isDarkMode() ? '' : 'bg-body',
                ],
            ],
        ],
    ],
    'forgot-password' => [
        'title'  => 'Forgot Password',
        'assets' => [
            'custom' => [
                'js' => [
                    'js/custom/authentication/password-reset/password-reset.js',
                ],
            ],
        ],
        'layout' => [
            'main' => [
                'type' => 'blank', // Set blank layout
                'body' => [
                    'class' => theme()->isDarkMode() ? '' : 'bg-body',
                ],
            ],
        ],
    ],

    'log' => [
        'audit'  => [
            'title'  => 'Audit Log',
            'assets' => [
                'custom' => [
                    'css' => [
                        'plugins/custom/datatables/datatables.bundle.css',
                    ],
                    'js'  => [
                        'plugins/custom/datatables/datatables.bundle.js',
                    ],
                ],
            ],
        ],
        'system' => [
            'title'  => 'System Log',
            'assets' => [
                'custom' => [
                    'css' => [
                        'plugins/custom/datatables/datatables.bundle.css',
                    ],
                    'js'  => [
                        'plugins/custom/datatables/datatables.bundle.js',
                    ],
                ],
            ],
        ],
    ],

    'account' => [
        'overview' => [
            'title'  => 'Account Overview',
            'view'   => 'account/overview/overview',
            'assets' => [
                'custom' => [
                    'js' => [
                        'js/custom/widgets.js',
                    ],
                ],
            ],
        ],

        'settings' => [
            'title'  => 'Account Settings',
            'assets' => [
                'custom' => [
                    'js' => [
                        'js/custom/account/settings/profile-details.js',
                        'js/custom/account/settings/signin-methods.js',
                        'js/custom/modals/two-factor-authentication.js',
                    ],
                ],
            ],
        ],
    ],

    'users'         => [
        'title' => 'User List',

        '*' => [
            'title' => 'Show User',

            'edit' => [
                'title' => 'Edit User',
            ],
        ],
    ],

    // Documentation pages
    'documentation' => [
        // '*' => array(
        //     'assets' => array(
        //         'vendors' => array(
        //             'css' => array(
        //                 'plugins/custom/prismjs/prismjs.bundle.css',
        //             ),
        //             'js'  => array(
        //                 'plugins/custom/prismjs/prismjs.bundle.js',
        //             ),
        //         ),
        //         'custom'  => array(
        //             'js' => array(
        //                 'js/custom/documentation/documentation.js',
        //             ),
        //         ),
        //     ),

        //     'layout' => array(
        //         'base'    => 'docs', // Set base layout: default|docs

        //         // Content
        //         'content' => array(
        //             'width'  => 'fixed', // Set fixed|fluid to change width type
        //             'layout' => 'documentation'  // Set content type
        //         ),
        //     ),
        // ),

        // 'getting-started' => array(
        //     'overview' => array(
        //         'title'       => 'Overview',
        //         'description' => '',
        //         'view'        => 'documentation/getting-started/overview',
        //     ),

        //     'build' => array(
        //         'title'       => 'Gulp',
        //         'description' => '',
        //         'view'        => 'documentation/getting-started/build/build',
        //     ),

        //     'multi-demo' => array(
        //         'overview' => array(
        //             'title'       => 'Overview',
        //             'description' => '',
        //             'view'        => 'documentation/getting-started/multi-demo/overview',
        //         ),
        //         'build'    => array(
        //             'title'       => 'Multi-demo Build',
        //             'description' => '',
        //             'view'        => 'documentation/getting-started/multi-demo/build',
        //         ),
        //     ),

        //     'file-structure' => array(
        //         'title'       => 'File Structure',
        //         'description' => '',
        //         'view'        => 'documentation/getting-started/file-structure',
        //     ),

        //     'customization' => array(
        //         'sass'       => array(
        //             'title'       => 'SASS',
        //             'description' => '',
        //             'view'        => 'documentation/getting-started/customization/sass',
        //         ),
        //         'javascript' => array(
        //             'title'       => 'Javascript',
        //             'description' => '',
        //             'view'        => 'documentation/getting-started/customization/javascript',
        //         ),
        //     ),

        //     'dark-mode' => array(
        //         'title' => 'Dark Mode Version',
        //         'view'  => 'documentation/getting-started/dark-mode',
        //     ),

        //     'rtl' => array(
        //         'title' => 'RTL Version',
        //         'view'  => 'documentation/getting-started/rtl',
        //     ),

        //     'troubleshoot' => array(
        //         'title' => 'Troubleshoot',
        //         'view'  => 'documentation/getting-started/troubleshoot',
        //     ),

        //     'changelog' => array(
        //         'title'       => 'Changelog',
        //         'description' => 'version and update info',
        //         'view'        => 'documentation/getting-started/changelog/changelog',
        //     ),

        //     'updates' => array(
        //         'title'       => 'Updates',
        //         'description' => 'components preview and usage',
        //         'view'        => 'documentation/getting-started/updates',
        //     ),

        //     'references' => array(
        //         'title'       => 'References',
        //         'description' => '',
        //         'view'        => 'documentation/getting-started/references',
        //     ),
        // ),

        // 'general' => array(
        //     'datatables'   => array(
        //         'overview' => array(
        //             'title'       => 'Overview',
        //             'description' => 'plugin overview',
        //             'view'        => 'documentation/general/datatables/overview/overview',
        //         ),
        //     ),
        //     'remove-demos' => array(
        //         'title'       => 'Remove Demos',
        //         'description' => 'How to remove unused demos',
        //         'view'        => 'documentation/general/remove-demos/index',
        //     ),
        // ),

        // 'configuration' => array(
        //     'general'     => array(
        //         'title'       => 'General Configuration',
        //         'description' => '',
        //         'view'        => 'documentation/configuration/general',
        //     ),
        //     'menu'        => array(
        //         'title'       => 'Menu Configuration',
        //         'description' => '',
        //         'view'        => 'documentation/configuration/menu',
        //     ),
        //     'page'        => array(
        //         'title'       => 'Page Configuration',
        //         'description' => '',
        //         'view'        => 'documentation/configuration/page',
        //     ),
        //     'npm-plugins' => array(
        //         'title'       => 'Add NPM Plugin',
        //         'description' => 'Add new NPM plugins and integrate within webpack mix',
        //         'view'        => 'documentation/configuration/npm-plugins',
        //     ),
        // ),
    ],
];
