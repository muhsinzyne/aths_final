<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentsRecords extends Model
{
    protected $primaryKey  = 'id';
    protected $table       = 'students_records';
    use HasFactory;

    public function student()
    {
        return $this->belongsTo(Students::class, 'Student_ID');
    }
}
