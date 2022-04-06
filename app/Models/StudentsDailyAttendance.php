<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentsDailyAttendance extends Model
{
    protected $table       = 'students_daily_attendance';
    use HasFactory;
}
