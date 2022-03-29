<?php
namespace App\Constants;

class PermissionConst
{
    public static function getActionList()
    {
        return [
            '.index'   => 'Index',
            '.create'  => 'Create',
            '.edit'    => 'Edit',
            '.show'    => 'Show',
            '.delete'  => 'Delete',
            '.report ' => 'Report',
            '.export'  => 'Export',
            '.import'  => 'Import',
            '.download'=> 'Download',
        ];
    }
}
