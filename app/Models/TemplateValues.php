<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateValues extends Model
{
    protected $primaryKey  = 'id';
    protected $table       = 'aths_template_values';
    protected $fillable    = ['code', 'value', 'created_by', 'updated_by'];
    use HasFactory;
}
