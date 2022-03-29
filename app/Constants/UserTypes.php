<?php
namespace App\Constants;

class UserTypes
{
    const ADMIN    = 'admin';
    const SU_ADMIN = 'su_admin';
    const USER     = 'user';

    const MALE   = 'M';
    const FEMALE = 'F';

    public static function getGenderListLetter()
    {
        return [UserTypes::MALE, UserTypes::FEMALE];
    }
}
