<?php
namespace App\Constants;

class AppUrls
{
    const PERMISSON_INDEX  = 'settings/permission';
    const PERMISSON_CREATE = 'settings/permission/create';
    const PERMISSON_EDIT   = 'settings/permission/{id}/edit';

    const ROLE_INDEX   = 'settings/roles';
    const ROLE_CREATE  = 'settings/roles/create';
    const ROLE_EDIT    = 'settings/roles/{id}/edit';

    const USERS_INDEX  = 'settings/users';
    const USERS_CREATE = 'settings/users/create';
    const USERS_EDIT   = 'settings/users/{id}/edit';
    const USERS_DELETE = 'settings/users/{id}/delete';
}
