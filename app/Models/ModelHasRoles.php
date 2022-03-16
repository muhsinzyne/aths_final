<?php
namespace App\Models;

use App\Constants\AppConst;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelHasRoles extends Model
{
    protected $table       = AppConst::DB_PREFIX . 'model_has_roles';
    use HasFactory;
}
