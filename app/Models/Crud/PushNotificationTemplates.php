<?php
namespace App\Models\Crud;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PushNotificationTemplates extends Model
{
    protected $primaryKey  = 'id';
    protected $table       = 'aths_push_notification_templates';
    protected $fillable    = ['code', 'template', 'description', 'template_id'];
    use HasFactory;
}
