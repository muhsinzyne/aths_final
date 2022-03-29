<?php
namespace App\Models\Crud;

use App\Constants\AppConst;
use App\Constants\UserTypes;
use App\Models\ModelHasRoles;
use DB;
use Spatie\Permission\Models\Role as ModelsRole;

class Role extends ModelsRole
{
    protected $table = AppConst::DB_PREFIX . 'roles';

    public static function getRoleList($activeUser = null)
    {
        $queryModel = self::query();
        if ($activeUser->type == UserTypes::SU_ADMIN) {
            return $queryModel->get();
        }
    }

    public function permissionNameList()
    {
        return $this->permissions->pluck('name')->toArray();
    }

    // public function users()
    // {
    //     return $this->hasMany(ModelHasRoles::class, 'role_id', 'id');

    //     // $usersList = DB::table(AppConst::DB_PREFIX . 'model_has_roles')
    //     // ->where('model_type', User::class)->where('model_id', $this->id)->get()->pluck('role_id')->toArray();
    // }
}
