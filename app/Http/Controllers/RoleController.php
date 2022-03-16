<?php
namespace App\Http\Controllers;

use App\Constants\AppConst;
use App\Constants\AppViews;
use App\Constants\UserConst;
use App\DataTables\RolesDataTable;
use App\DataTables\RoleUsersDataTable;
use App\Models\AuthUser;
use App\Models\Crud\Permission;
use App\Models\Crud\Role;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RolesDataTable $dataTable)
    {
        $activeUser        = $this->canAccess('dashboard.index');
        $view              = theme()->getOption('page', 'view');
        $page              = $this->page;
        $page['title']     = trans('Roles List');
        $info              = auth()->user()->info;
        $roles             = Role::getRoleList($activeUser);
        $rowPermissionList = Permission::getAllPermission();
        if (view()->exists(AppViews::ROLES_INDEX)) {
            return view(AppViews::ROLES_INDEX, compact('page', 'info', 'roles', 'activeUser', 'rowPermissionList'));
        }

        //return $dataTable->render(AppViews::ROLES_INDEX, compact('page', 'info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activeUser           = $this->canAccess('dashboard.index');
        $view                 = theme()->getOption('page', 'view');
        $page                 = $this->page;
        $info                 = auth()->user()->info;
        $page['title']        = trans('Create Role ');
        $page['breadcrumb'][] = ['title' => 'Create Role ', 'path' => ''];
        if ($activeUser->type == UserConst::SU_ADMIN) {
            $permissions = Permission::all()->pluck('name', 'id')->toArray();
        } else {
            $permissions = $activeUser->permissionListByRoles();
        }

        if (view()->exists(AppViews::ROLES_CREATE)) {
            return view(AppViews::ROLES_CREATE, compact('page', 'info', 'activeUser', 'permissions'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $activeUser           = $this->canAccess('dashboard.index');
        $this->validate(
            $request,
            [
                'name'        => 'required|max:100|unique:' . AppConst::DB_PREFIX . 'roles,name,NULL,id,created_by,' . Auth::user()->id,
                'permissions' => 'required',
            ]
        );

        $role             = new Role();
        $role->name       = $request->input('name');
        $role->guard_name = $request->input('guard_name');
        $role->created_by = Auth::user()->id;
        $permissions      = $request['permissions'];
        $role->save();
        foreach ($permissions as $permission) {
            $p = Permission::where('id', '=', $permission)->firstOrFail();
            $role->givePermissionTo($p);
        }
        notify()->success('Role - ' . $role->name . ' has been created');

        return redirect(route('settings.roles.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role, RoleUsersDataTable $dataTable)
    {
        $activeUser           = $this->canAccess('dashboard.index');
        $view                 = theme()->getOption('page', 'view');
        $page                 = $this->page;
        $info                 = auth()->user()->info;
        $page['title']        = trans('View Role Details');
        $page['breadcrumb'][] = ['title' => 'View Role Details', 'path' => ''];

        $dataTable->roleId = $role->id;

        if (view()->exists(AppViews::ROLES_VIEW)) {
            return $dataTable->render(AppViews::ROLES_VIEW, compact('page', 'info', 'role', 'activeUser'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $activeUser           = $this->canAccess('dashboard.index');
        $view                 = theme()->getOption('page', 'view');
        $page                 = $this->page;
        $info                 = auth()->user()->info;
        $page['title']        = trans('Edit Role');
        $page['breadcrumb'][] = ['title' => 'Edit Role', 'path' => ''];

        if ($activeUser->type == UserConst::SU_ADMIN) {
            $permissions = Permission::all()->pluck('name', 'id')->toArray();
        } else {
            $permissions = $activeUser->permissionListByRoles();
        }

        $cPermissionIds = $role->permissions->pluck('id')->toArray();

        if (view()->exists(AppViews::ROLES_EDIT)) {
            return view(AppViews::ROLES_EDIT, compact('page', 'info', 'role', 'activeUser', 'permissions', 'cPermissionIds'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $activeUser           = $this->canAccess('dashboard.index');
        $this->validate(
            $request,
            [
                'name'        => 'required|max:100|unique:' . AppConst::DB_PREFIX . 'roles,name,' . $role->id,
                'permissions' => 'required',
            ]
        );

        $role->name       = $request->input('name');
        $role->guard_name = $request->input('guard_name');
        $permissions      = $request['permissions'];
        $role->update();
        $role->syncPermissions($permissions);
        notify()->success('Role - ' . $role->name . ' has been created');

        return redirect(route('settings.roles.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function removeUserFromRole($role_id, $user_id)
    {
        $activeUser           = $this->canAccess('dashboard.index');
        $role                 = Role::findOrFail($role_id);
        $user                 = User::findOrFail($user_id);
        $user->removeRole($role->name);
        notify()->success('User - ' . $user->name . ' has been removed from role - ' . $role->name);

        return redirect()->back();
    }
}
