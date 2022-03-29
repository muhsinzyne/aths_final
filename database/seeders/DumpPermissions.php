<?php
namespace Database\Seeders;

use App\Models\Crud\Permission;
use Illuminate\Database\Seeder;

class DumpPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $crudList      = config('permission-list.crud');
        $crudExtraList = config('permission-list.crud-extra');
        $crudActions   = config('permission-list.crud-actions');

        $crudIgnore = config('permission-list.crud-ignore');

        foreach ($crudList as $key => $module) {
            $moduleName  =  str_replace('.', ' . ', $module);
            $moduleName  = ucwords($moduleName);
            $moduleName  =  str_replace(' . ', ' of ', $moduleName);
            foreach ($crudActions as $key => $action) {
                $permission              = new Permission();
                $permission->guard_name  = 'web';
                $permission->name        = $module . '.' . $action;
                $permission->description = $moduleName . ' ' . ucwords($action);
                if (array_key_exists($module, $crudIgnore)) {
                    if (in_array($action, $crudIgnore[$module])) {
                        continue;
                    } else {
                        $permission->save();
                    }
                } else {
                    $permission->save();
                }
            }

            if (array_key_exists($module, $crudExtraList)) {
                foreach ($crudExtraList[$module] as $key => $action) {
                    $permission              = new Permission();
                    $permission->guard_name  = 'web';
                    $permission->name        = $module . '.' . $action;
                    $permission->description = $moduleName . ' ' . ucwords($action);
                    $permission->save();
                }
            }
        }
    }
}
