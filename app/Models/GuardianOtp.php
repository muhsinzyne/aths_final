<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuardianOtp extends Model
{
    protected $primaryKey  = 'id';
    protected $table       = 'aths_guardian_otp';
    use HasFactory;
}
