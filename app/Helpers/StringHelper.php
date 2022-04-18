<?php
namespace App\Helpers;

class StringHelper
{
    public static function cleanString($string = '')
    {
        $string = strtolower($string);

        return $string;
    }

    public static function generateOtp()
    {
        $otp = rand(1000, 9999);

        return $otp;
    }
}
