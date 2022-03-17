<?php
namespace App\Models;

use App\Constants\AppConst;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleHasPermission extends Model
{
    protected $table = AppConst::DB_PREFIX . 'role_has_permissions';
    use HasFactory;
}
