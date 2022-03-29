<?php
namespace App\Models\Crud;

use App\Constants\AppConst;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission as ModelsPermission;

class Permission extends ModelsPermission
{
    protected $table = AppConst::DB_PREFIX . 'permissions';
    use HasFactory;

    public static function getAllPermission()
    {
        return self::get()->pluck('name')->toArray();
    }
}
