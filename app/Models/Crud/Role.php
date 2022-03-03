<?php
namespace App\Models\Crud;

use App\Constants\AppConst;
use App\Constants\UserTypes;
use Spatie\Permission\Models\Role as ModelsRole;

class Role extends ModelsRole
{
    protected $table = AppConst::DB_PREFIX . 'permissions';

    public static function getRoleList($activeUser = null)
    {
        $queryModel = self::query();
        if ($activeUser->type == UserTypes::SU_ADMIN) {
            return $queryModel->get();
        }
    }
}
