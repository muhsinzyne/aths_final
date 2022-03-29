<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentsAttendance extends Model
{
    protected $primaryKey  = 'id';
    protected $table       = 'students_attendance';
    use HasFactory;
}
