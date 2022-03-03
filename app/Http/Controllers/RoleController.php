<?php
namespace App\Http\Controllers;

use App\Constants\AppViews;
use App\DataTables\RolesDataTable;
use App\Models\Crud\Permission;
use App\Models\Crud\Role;
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
        $activeUser    = $this->canAccess('dashboard.index');
        $view          = theme()->getOption('page', 'view');
        $page          = $this->page;
        $page['title'] = trans('Roles List');
        $info          = auth()->user()->info;
        $roles         = Role::getRoleList($activeUser);

        if (view()->exists(AppViews::ROLES_INDEX)) {
            return view(AppViews::ROLES_INDEX, compact('page', 'info', 'roles'));
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
        $activeUser    = $this->canAccess('dashboard.index');
        $view          = theme()->getOption('page', 'view');
        $page          = $this->page;
        $info          = auth()->user()->info;
        $page['title'] = trans('Create Role');

        if ($activeUser->type == 'su_admin') {
            $permissions = Permission::all()->pluck('name', 'id')->toArray();
        } else {
            $permissions = new Collection();
            foreach ($activeUser->roles as $role) {
                $permissions = $permissions->merge($role->permissions);
            }
            $permissions = $permissions->pluck('name', 'id')->toArray();
        }

        if (view()->exists(AppViews::ROLES_CREATE)) {
            return view(AppViews::ROLES_CREATE, compact('page', 'info', 'permissions'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
}
