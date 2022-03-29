<?php

return [
    'v8.0.36' => [
        'date'      => '12 February, 2022',
        'changelog' => [
            'new' => [
                'Added a new icons set - <code>fonticons</code>.',
                'Added a new <code>dark mode</code> dropdown menu.',
            ],

            'update' => [
                'Upgrade Laravel version 9',
                'Update core assets from the HTML version.',
                'Improve setup documentations.',
            ],

            'fix' => [
                'Fixed the dropdown in Datatable. Use <code>KTMenu.createInstances();</code> to reinitialize the dropdown.',
                'Fixed the authorization error after a long inactivity.',
                'Fixed code error when running <code>php artisan optimize</code> command.',
                'Fixed undefined route page and redirect to home page.',
                'Fixed missing vendor files <code>resources/views/vendor</code>',
            ],
        ],
    ],
];
