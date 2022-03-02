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
                    'title'       => '',
                    'description' => '',
                    'tooltip'     => '',
                    'price'       => '',
                ],
                [
                    'title'       => '',
                    'description' => '',
                    'tooltip'     => '',
                    'price'       => '',
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
        ],
    ],

    // Meta
    'meta'    => [
        'title'       => 'ATHS Communicator Application Sample meta. can be changed later..',
        'description' => 'ATHS Communicator Application sample Descirption. can be changed later..',
        'keywords'    => 'ATHS, Communicator, Mobile Application, IAT',
        'canonical'   => 'https://www.aths.ac.ae',
    ],

    // General
    'general' => [
        'website'             => 'https://aths.ac.aem',
        'about'               => 'https://aths.ac.ae/about',
        'contact'             => 'mailto:support@aths.ac.ae',
        'support'             => 'https://aths.ac.ae/support',
        'bootstrap-docs-link' => '#',
        'licenses'            => 'https://aths.ac.ae',
        'social-accounts'     => [
            [
                'name' => 'Youtube', 'url' => 'https://www.youtube.com/', 'logo' => 'svg/social-logos/youtube.svg', 'class' => 'h-20px',
            ],
            [
                'name' => 'Github', 'url' => 'https://github.com', 'logo' => 'svg/social-logos/github.svg', 'class' => 'h-20px',
            ],
            [
                'name' => 'Twitter', 'url' => 'https://twitter.com', 'logo' => 'svg/social-logos/twitter.svg', 'class' => 'h-20px',
            ],
            [
                'name' => 'Instagram', 'url' => 'https://www.instagram.com', 'logo' => 'svg/social-logos/instagram.svg', 'class' => 'h-20px',
            ],

            [
                'name' => 'Facebook', 'url' => 'https://www.facebook.com/', 'logo' => 'svg/social-logos/facebook.svg', 'class' => 'h-20px',
            ],
            [
                'name' => 'Dribbble', 'url' => 'https://dribbble.com', 'logo' => 'svg/social-logos/dribbble.svg', 'class' => 'h-20px',
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
