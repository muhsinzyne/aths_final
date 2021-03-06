<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $primaryKey  = 'id';
    protected $table       = 'schools';
    use HasFactory;

    public function students()
    {
        return $this->hasMany(Students::class, 'School_ID', 'SchoolId');
    }
}
