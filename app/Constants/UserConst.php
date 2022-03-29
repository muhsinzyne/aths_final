<?php
namespace App\Constants;

class UserConst
{
    const SU_ADMIN = 'su_admin';

    public static function getUserTypes()
    {
        return [
            ''         => 'None',
            'su_admin' => 'Super Admin',
            'admin'    => 'Admin',
            'student'  => 'Student',
            'parent'   => 'Parent',
        ];
    }
}
