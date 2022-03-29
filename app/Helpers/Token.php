<?php
namespace App\Helpers;

use JWTAuth;

class Token
{
    public static function toUser($auth_token)
    {
        $token = trim(str_replace('Bearer ', '', $auth_token));

        $payload = JWTAuth::setToken($token)->getPayload();

        return JWTAuth::toUser($token);
    }
}
