<?php
namespace App\Constants;

class UserConst
{
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
