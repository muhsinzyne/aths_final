<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $primaryKey  = 'Student_ID';
    protected $table       = 'students';
    use HasFactory;

    public function records()
    {
        return $this->hasMany(StudentsRecords::class, 'Student_ID');
    }

    public function studentAttendance()
    {
        return $this->hasMany(StudentsAttendance::class, 'Student_ID');
    }
}
