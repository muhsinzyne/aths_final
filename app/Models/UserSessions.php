<?php
namespace App\Models;

use App\Constants\AppConst;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class UserSessions extends Model
{
    use HasFactory;
    const UPDATED_AT    = null;
    protected $table    =  AppConst::DB_PREFIX . 'user_sessions';
    protected $fillable = ['user_id', 'client_type', 'unique_id', 'token', 'created_at'];

    public static function createUserToken($args)
    {
        $deleteOldToken = self::where('user_id', $args['user_id'])->delete();
        $token          = Str::uuid()->toString();
        $userSession    = self::create($args + ['token' => $token]);

        return $userSession->token;
    }
}
