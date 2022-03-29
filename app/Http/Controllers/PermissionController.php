<?php
namespace App\Http\Controllers;

use App\Constants\AppConst;
use App\Constants\AppUrls;
use App\Constants\AppViews;
use App\DataTables\Logs\AuditLogsDataTable;
use App\DataTables\PermissionsDataTable;
use App\Models\Crud\Permission;
use Auth;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PermissionsDataTable $dataTable)
    {
        $activeUser              = $this->canAccess('dashboard.index');
        $view                    = theme()->getOption('page', 'view');
        $page                    = $this->page;
        $page['title']           = trans('Permission List');
        $info                    = auth()->user()->info;

        // if (view()->exists(AppViews::PERMISSIONS_INDEX)) {
        //     return view(AppViews::PERMISSIONS_INDEX, compact('page'));
        // }

        // return redirect('/');

        return $dataTable->render(AppViews::PERMISSIONS_INDEX, compact('page', 'info'));
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
        $page['title'] = trans('Create Permission');

        if (view()->exists(AppViews::PERMISSSIONS_CREATE)) {
            return view(AppViews::PERMISSSIONS_CREATE, compact('page', 'info'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Permission $permission)
    {
        $activeUser    = $this->canAccess('dashboard.index');
        $this->validate(
            $request,
            [
                'name'       => 'required|max:100|unique:' . AppConst::DB_PREFIX . 'permissions,name,',
                'guard_name' => 'required',
                //'permissions' => 'required',
            ]
        );
        $description = $request->input('description');

        $permission = Permission::create(['name' => $request->input('name'), 'guard_name' => $request->input('guard_name'), 'description' => $description]);
        if ($permission) {
            notify()->success('Permission -  has been Created');
        }
        $returnBack = $request->input('save_and_add') ?? false;

        return  $returnBack ? redirect()->route('settings.permission.create') : redirect()->route('settings.permission.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->route('settings.permission.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        $activeUser           = $this->canAccess('dashboard.index');
        $view                 = theme()->getOption('page', 'view');
        $page                 = $this->page;
        $info                 = auth()->user()->info;
        $page['title']        = trans('Edit Permission');
        $page['breadcrumb'][] = ['title' => 'Configurations', 'path' => ''];
        $page['breadcrumb'][] = ['title' => 'Permissions', 'path' => AppUrls::PERMISSON_INDEX];
        if (view()->exists(AppViews::PERMISSSIONS_EDIT)) {
            return view(AppViews::PERMISSSIONS_EDIT, compact('page', 'info', 'permission'));
        }

        return redirect('/');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        $activeUser    = $this->canAccess('dashboard.index');

        $this->validate(
            $request,
            [
                'name'       => 'required|max:100|unique:' . AppConst::DB_PREFIX . 'permissions,name,' . $permission['id'] . ',id',
                'guard_name' => 'required',
                //'permissions' => 'required',
            ]
        );

        $permission->name        = $request->input('name');
        $permission->guard_name  = $request->input('guard_name');
        $permission->description = $request->input('description');
        $returnBack              = $request->input('save_and_add') ?? false;
        if ($permission->update()) {
            notify()->success('Permission - ' . $permission->name . ' has been updated');
        }

        return  $returnBack ? redirect()->route('settings.permission.edit', $permission->id) : redirect()->route('settings.permission.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $activeUser    = $this->canAccess('dashboard.index');
        $deleted       = false;
        $deleted       = $permission->delete();
        if ($deleted) {
            notify()->success('Permission - has been deleted');
        }

        // if ($activeUser->type == 'super_admin') {
        //     $deleted = $permission->delete();
        //     if ($deleted) {
        //         notify()->success('Permission - has been deleted');
        //     }
        // }
        if ($deleted == false) {
            notify()->error('Your are not autherized to deleted this permission');
        }

        return redirect()->route('settings.permission.index');
    }
}
