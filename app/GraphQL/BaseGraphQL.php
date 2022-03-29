<?php
namespace App\GraphQL;

use Request;
use App\Helpers\Token;
use App\Models\AuthUser;

abstract class BaseGraphQL
{
    public function tokenValidate()
    {
        $auth_token = Request::header('Authorization');
        $user       = Token::toUser($auth_token);
        $user       = AuthUser::findOrFail($user['id']);

        return $user;
    }
}
