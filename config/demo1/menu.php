<?php

use App\Constants\AppUrls;

return [

    'main'=> [
        [
            'title' => 'DashBoard',
            'path'  => 'index',
            'icon'  => theme()->getSvgIcon('demo1/media/icons/duotune/art/art002.svg', 'svg-icon-2'),
        ],

        [
            'classes' => ['content' => 'pt-8 pb-2'],
            'content' => '<span class="menu-section text-muted text-uppercase fs-8 ls-1">Configurations</span>',
        ],

        [
            'title'      => 'Configuration',
            'icon'       => [
                'svg'  => theme()->getSvgIcon('demo1/media/icons/duotune/communication/com006.svg', 'svg-icon-2'),
                'font' => '<i class="bi bi-person fs-2"></i>',
            ],
            'classes'    => ['item' => 'menu-accordion'],
            'attributes' => [
                'data-kt-menu-trigger' => 'click',
            ],
            'sub'        => [
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => [
                    [
                        'title'      => 'Users Management',
                        'path'       => AppUrls::USERS_INDEX,
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                        'sub'        => [
                            'class' => 'menu-sub-accordion menu-active-bg',
                            'items' => [
                                [
                                    'title'  => 'Users List',
                                    'path'   => AppUrls::USERS_INDEX,
                                    'bullet' => '<span class="bullet bullet-dot"></span>',

                                ],

                                [
                                    'title'  => 'Create Users',
                                    'path'   => AppUrls::USERS_CREATE,
                                    'bullet' => '<span class="bullet bullet-dot"></span>',

                                ],

                            ],
                        ],
                    ],
                    [
                        'title'      => 'Permissions',
                        'path'       => AppUrls::PERMISSON_INDEX,
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                        'sub'        => [
                            'class' => 'menu-sub-accordion menu-active-bg',
                            'items' => [
                                [
                                    'title'  => 'Permission List',
                                    'path'   => AppUrls::PERMISSON_INDEX,
                                    'bullet' => '<span class="bullet bullet-dot"></span>',

                                ],

                                [
                                    'title'  => 'Create Permission',
                                    'path'   => AppUrls::PERMISSON_CREATE,
                                    'bullet' => '<span class="bullet bullet-dot"></span>',

                                ],

                            ],
                        ],
                    ],

                    [
                        'title'      => 'Roles',
                        'path'       => AppUrls::ROLE_INDEX,
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                        'sub'        => [
                            'class' => 'menu-sub-accordion menu-active-bg',
                            'items' => [
                                [
                                    'title'  => 'Roles List',
                                    'path'   => AppUrls::ROLE_INDEX,
                                    'bullet' => '<span class="bullet bullet-dot"></span>',

                                ],

                                [
                                    'title'  => 'Create Role',
                                    'path'   => AppUrls::ROLE_CREATE,
                                    'bullet' => '<span class="bullet bullet-dot"></span>',

                                ],

                            ],
                        ],
                    ],
                ],
            ],
        ],

        [
            'title'      => 'Account',
            'icon'       => [
                'svg'  => theme()->getSvgIcon('demo1/media/icons/duotune/communication/com006.svg', 'svg-icon-2'),
                'font' => '<i class="bi bi-person fs-2"></i>',
            ],
            'classes'    => ['item' => 'menu-accordion'],
            'attributes' => [
                'data-kt-menu-trigger' => 'click',
            ],
            'sub'        => [
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => [
                    [
                        'title'  => 'Overview',
                        'path'   => 'account/overview',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ],
                    [
                        'title'  => 'Settings',
                        'path'   => 'account/settings',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ],
                    [
                        'title'      => 'Security',
                        'path'       => '#',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                        'attributes' => [
                            'link' => [
                                'title'             => 'Coming soon',
                                'data-bs-toggle'    => 'tooltip',
                                'data-bs-trigger'   => 'hover',
                                'data-bs-dismiss'   => 'click',
                                'data-bs-placement' => 'right',
                            ],
                        ],
                    ],
                ],
            ],
        ],

        [
            'title'      => 'System',
            'icon'       => [
                'svg'  => theme()->getSvgIcon('demo1/media/icons/duotune/general/gen025.svg', 'svg-icon-2'),
                'font' => '<i class="bi bi-layers fs-3"></i>',
            ],
            'classes'    => ['item' => 'menu-accordion'],
            'attributes' => [
                'data-kt-menu-trigger' => 'click',
            ],
            'sub'        => [
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => [
                    [
                        'title'      => 'Settings',
                        'path'       => '#',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                        'attributes' => [
                            'link' => [
                                'title'             => 'Coming soon',
                                'data-bs-toggle'    => 'tooltip',
                                'data-bs-trigger'   => 'hover',
                                'data-bs-dismiss'   => 'click',
                                'data-bs-placement' => 'right',
                            ],
                        ],
                    ],
                    [
                        'title'  => 'Audit Log',
                        'path'   => 'log/audit',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ],
                    [
                        'title'  => 'System Log',
                        'path'   => 'log/system',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ],
                ],
            ],
        ],

        [
            'content' => '<div class="separator mx-1 my-4"></div>',
        ],

    ],
];
