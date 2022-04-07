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

    const SETTINGS_PROFILE_INDEX = 'settings/profile';

    const STUDENTS_INDEX = 'students';
    const SCHOOLS_INDEX  = 'schools';

    const TEMPLATE_VALUES_INDEX     = 'settings/crud/template-values';
    const TEMPLATE_VALUES_VIEW      = 'settings/crud/template-values/{id}';
    const TEMPLATE_VALUES_CREATE    = 'settings/crud/template-values/create';
    const TEMPLATE_VALUES_EDIT      = 'settings/crud/template-values/{id}/edit';
    const TEMPLATE_VALUES_DELETE    = 'settings/crud/template-values/{id}/delete';

    const PUSH_NOTIFIAION_TEMPLATES_INDEX     = 'settings/crud/push-notification';
    const PUSH_NOTIFIAION_TEMPLATES_CREATE    = 'settings/crud/push-notification/create';
    const PUSH_NOTIFIAION_TEMPLATES_VIEW      = 'settings/crud/push-notification/{id}';
    const PUSH_NOTIFIAION_TEMPLATES_EDIT      = 'settings/crud/push-notification/{id}/edit';
    const PUSH_NOTIFIAION_TEMPLATES_DELETE    = 'settings/crud/push-notification/{id}/delete';
}
