<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Contracts\JWTSubject;

class AuthUser extends User implements JWTSubject
{
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function getRoles()
    {
        return $this->getRoleNames();
    }

    public function getAllPermissionNames()
    {
        return $this->getAllPermissions()->pluck('name')->toArray();
    }

    public function myRoleIdList()
    {
        $ids = DB::table('model_has_roles')->where('model_type', 'App\Models\AuthUser')->where('model_id', $this->id)->get()->pluck('role_id')->toArray();

        return $ids;
    }
}
