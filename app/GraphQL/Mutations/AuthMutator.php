<?php
namespace App\GraphQL\Mutations;

use App\GraphQL\BaseGraphQL;
use App\Models\AuthUser;
use App\Models\UserSessions;
use Auth;
use Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthMutator extends BaseGraphQL
{
    /**
    * Login Mutation
    *
    */
    public function login($root, array $args, $context)
    {
        $error       = false;
        $message     = '';
        $email       = $args['email'];
        $password    = $args['password'];
        $unique_id   = $args['unique_id'] ?? '';
        $client_type = $args['client_type'] ?? '';

        $loggedIn    = Auth::attempt(['email' => $email, 'password' => $password]);
        if (!$loggedIn) {
            $error   = true;
            $message = 'Invalid Login Credentials';

            return compact('error', 'message');
        }
        $user          = AuthUser::where('email', $email)->first();
        $roles         = $user->getRoles();
        $auth_token    = JWTAuth::fromUser($user);
        $refresh_token = UserSessions::createUserToken([
            'user_id'     => $user->id,
            'unique_id'   => $unique_id,
            'client_type' => $client_type,
        ]);

        $error   = false;
        $message = 'Account logged In';

        return compact('auth_token', 'refresh_token', 'user', 'roles', 'error', 'message');
    }
}
