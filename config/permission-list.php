<?php

return [

    'crud' => [
        'dashboard',
        'settings.permissions',
        'settings.roles',
        'settings.users'
    ],
    'crud-extra' => [
        'settings.roles' => [
            'assign',
            'remove',
        ]
    ],
    'crud-ignore' => [
        'dashboard' => [
            'create',
            'view',
            'edit',
            'delete',
        ],
        'settings.permissions' => [
            //'create'
        ]
    ],
    'crud-actions'  => [
        'index',
        'create',
        'view',
        'edit',
        'delete',
    ]

];
