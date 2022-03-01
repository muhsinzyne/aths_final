<?php

use App\Constants\AppConst;

return [
    // Product
    'product' => [
        'name'        => AppConst::APP_NAME,
        'description' => AppConst::APP_DESCRIPTION,
        'preview'     => AppConst::APP_PREVIEW,
        'home'        => AppConst::APP_HOME,
        'purchase'    => AppConst::APP_PURCHASE,
        'licenses'    => [
            'terms' => AppConst::TERMS,
            'types' => [
                [
                    'title'       => 'Regular License',
                    'description' => 'For single end product used by you or one client',
                    'tooltip'     => 'Use, by you or one client in a single end product which end users are not charged for',
                    'price'       => '39',
                ],
                [
                    'title'       => 'Extended License',
                    'description' => 'For single SaaS app with paying users',
                    'tooltip'     => 'Use, by you or one client, in a single end product which end users can be charged for.',
                    'price'       => '939',
                ],
            ],
        ],
        'demos'       => [
            AppConst::THEME => [
                'title'       => 'Demo 1',
                'description' => 'Default Dashboard',
                'published'   => true,
                'thumbnail'   => 'demos/demo1.png',
            ],

            'demo2' => [
                'title'       => 'Demo 2',
                'description' => 'SaaS Application',
                'published'   => true,
                'thumbnail'   => 'demos/demo2.png',
            ],

            'demo3' => [
                'title'       => 'Demo 3',
                'description' => 'New Trend',
                'published'   => true,
                'thumbnail'   => 'demos/demo3.png',
            ],

            'demo4' => [
                'title'       => 'Demo 4',
                'description' => 'Intranet Application',
                'published'   => true,
                'thumbnail'   => 'demos/demo4.png',
            ],

            'demo5' => [
                'title'       => 'Demo 5',
                'description' => 'Support Forum',
                'published'   => true,
                'thumbnail'   => 'demos/demo5.png',
            ],

            'demo6' => [
                'title'       => 'Demo 6',
                'description' => 'Admin Backend',
                'published'   => true,
                'thumbnail'   => 'demos/demo6.png',
            ],

            'demo7' => [
                'title'       => 'Demo 7',
                'description' => 'CRM Dashboard',
                'published'   => true,
                'thumbnail'   => 'demos/demo7.png',
            ],

            'demo8' => [
                'title'       => 'Demo 8',
                'description' => 'Core Dashboard',
                'published'   => true,
                'thumbnail'   => 'demos/demo8.png',
            ],

            'demo9' => [
                'title'       => 'Demo 9',
                'description' => 'Fancy Dashboard',
                'published'   => true,
                'thumbnail'   => 'demos/demo9.png',
            ],

            'demo10' => [
                'title'       => 'Demo 10',
                'description' => 'Project Grid',
                'published'   => false,
                'thumbnail'   => 'demos/demo10.png',
            ],

            'demo11' => [
                'title'       => 'Demo 11',
                'description' => 'Light Dashboard',
                'published'   => false,
                'thumbnail'   => 'demos/demo11.png',
            ],

            'demo12' => [
                'title'       => 'Demo 12',
                'description' => 'Creative Dashboard',
                'published'   => false,
                'thumbnail'   => 'demos/demo12.png',
            ],

            'demo13' => [
                'title'       => 'Demo 13',
                'description' => 'Classic Dashboard',
                'published'   => false,
                'thumbnail'   => 'demos/demo13.png',
            ],

            'demo14' => [
                'title'       => 'Demo 14',
                'description' => 'Interactive Dashboard',
                'published'   => false,
                'thumbnail'   => 'demos/demo14.png',
            ],

            'demo15' => [
                'title'       => 'Demo 15',
                'description' => 'Member Dashboard',
                'published'   => false,
                'thumbnail'   => 'demos/demo15.png',
            ],

            'demo16' => [
                'title'       => 'Demo 16',
                'description' => 'Modern Dashboard',
                'published'   => false,
                'thumbnail'   => 'demos/demo16.png',
            ],

            'demo17' => [
                'title'       => 'Demo 17',
                'description' => 'Fancy Dashboard',
                'published'   => false,
                'thumbnail'   => 'demos/demo17.png',
            ],

            'demo18' => [
                'title'       => 'Demo 18',
                'description' => 'Minimalistic Dashboard',
                'published'   => false,
                'thumbnail'   => 'demos/demo18.png',
            ],

            'demo19' => [
                'title'       => 'Demo 19',
                'description' => 'Futuristic Dashboard',
                'published'   => false,
                'thumbnail'   => 'demos/demo19.png',
            ],

            'demo20' => [
                'title'       => 'Demo 20',
                'description' => 'Advanced Dashboard',
                'published'   => false,
                'thumbnail'   => 'demos/demo20.png',
            ],

            'demo21' => [
                'title'       => 'Demo 21',
                'description' => 'Monochrome Dashboard',
                'published'   => false,
                'thumbnail'   => 'demos/demo21.png',
            ],

            'demo22' => [
                'title'       => 'Demo 22',
                'description' => 'Social Dashboard',
                'published'   => false,
                'thumbnail'   => 'demos/demo22.png',
            ],

            'demo23' => [
                'title'       => 'Demo 23',
                'description' => 'SaaS Dashboard',
                'published'   => false,
                'thumbnail'   => 'demos/demo23.png',
            ],

            'demo24' => [
                'title'       => 'Demo 24',
                'description' => 'Compact Dashboard',
                'published'   => false,
                'thumbnail'   => 'demos/demo24.png',
            ],

        ],
    ],

    // Meta
    'meta'    => [
        'title'       => 'Metronic - the world\'s #1 selling Bootstrap Admin Theme Ecosystem for HTML, Vue, React, Angular & Laravel',
        'description' => 'The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue & Laravel versions. Grab your copy now and get life-time updates for free.',
        'keywords'    => 'Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon',
        'canonical'   => 'https://preview.keenthemes.com/metronic8',
    ],

    // General
    'general' => [
        'website'             => 'https://keenthemes.com',
        'about'               => 'https://keenthemes.com',
        'contact'             => 'mailto:support@keenthemes.com',
        'support'             => 'https://keenthemes.com/support',
        'bootstrap-docs-link' => 'https://getbootstrap.com/docs/5.0',
        'licenses'            => 'https://keenthemes.com/licensing',
        'social-accounts'     => [
            [
                'name' => 'Youtube', 'url' => 'https://www.youtube.com/c/KeenThemesTuts/videos', 'logo' => 'svg/social-logos/youtube.svg', 'class' => 'h-20px',
            ],
            [
                'name' => 'Github', 'url' => 'https://github.com/KeenthemesHub', 'logo' => 'svg/social-logos/github.svg', 'class' => 'h-20px',
            ],
            [
                'name' => 'Twitter', 'url' => 'https://twitter.com/keenthemes', 'logo' => 'svg/social-logos/twitter.svg', 'class' => 'h-20px',
            ],
            [
                'name' => 'Instagram', 'url' => 'https://www.instagram.com/keenthemes', 'logo' => 'svg/social-logos/instagram.svg', 'class' => 'h-20px',
            ],

            [
                'name' => 'Facebook', 'url' => 'https://www.facebook.com/keenthemes', 'logo' => 'svg/social-logos/facebook.svg', 'class' => 'h-20px',
            ],
            [
                'name' => 'Dribbble', 'url' => 'https://dribbble.com/keenthemes', 'logo' => 'svg/social-logos/dribbble.svg', 'class' => 'h-20px',
            ],
        ],
    ],

    // Layout
    'layout'  => [
        // Docs
        'docs'          => [
            'logo-path'  => [
                'default' => 'logos/logo-1.svg',
                'dark'    => 'logos/logo-1-dark.svg',
            ],
            'logo-class' => 'h-25px',
        ],

        // Illustration
        'illustrations' => [
            'set' => 'sketchy-1',
        ],

        // Engage
        'engage'        => [
            'demos'    => [
                'enabled'   => true,
                'direction' => 'end',
            ],
            'explore'  => [
                'enabled'   => true,
                'direction' => 'end',
            ],
            'help'     => [
                'enabled'   => true,
                'direction' => 'end',
            ],
            'purchase' => [
                'enabled' => true,
            ],
        ],
    ],

];
