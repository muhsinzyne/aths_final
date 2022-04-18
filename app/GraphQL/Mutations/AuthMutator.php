<?php
namespace App\GraphQL\Mutations;

use App\GraphQL\BaseGraphQL;
use App\Helpers\StringHelper;
use App\Models\AuthUser;
use App\Models\Guardians;
use App\Models\UserSessions;
use Auth;
use Illuminate\Support\Str;
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

    /**
    * Guardian OTP Request
    *
    *
    */
    public function guardianOtpRequest($root, array $args, $context)
    {
        $error           = false;
        $message         = '';
        $email           = StringHelper::cleanString($args['email'] ?? '');
        $guardian        = Guardians::where('email_id', $email)->first();
        if (!$guardian) {
            $error   = true;
            $message = 'User not found';
        } else {
            $guardian->sendEmailForGuardian();
        }

        return compact('error', 'message');
    }

    public function guardianOtpValidation($root, array $args, $context)
    {
        $error           = false;
        $message         = '';
        $otp             = $args['otp'] ?? '';
        $email           = $args['email'] ?? '';
        $guardian        = Guardians::where('email_id', $email)->first();
        if ($guardian != null && $guardian->otp != null) {
            if ($guardian->otp->value === $otp) {
                $guardian->otp->delete();
                $error             = false;
                $message           = 'OTP Validated';
                $auth_token        = JWTAuth::fromUser($guardian);
                $refresh_token     = UserSessions::createUserToken([
                    'user_id'     => $guardian->id,
                    'unique_id'   => Str::uuid()->toString(),
                    'client_type' => 'ios',
                ]);

                return compact('error', 'message', 'auth_token', 'guardian', 'refresh_token');
            } else {
                $error   = true;
                $message = 'Invalid OTP';
            }
        } else {
            $error   = true;
            $message = 'Invalid OTP';
        }

        return compact('error', 'message');
    }
}
