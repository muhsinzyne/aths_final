<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceDates extends Model
{
    protected $primaryKey  = 'AttendanceDate';
    protected $table       = 'attendance dates';
    use HasFactory;
}
