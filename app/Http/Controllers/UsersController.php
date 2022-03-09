<?php
namespace App\Http\Controllers;

use App\Constants\AppViews;
use App\DataTables\UsersDataTable;
use App\Models\AuthUser;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UsersDataTable $dataTable)
    {
        $activeUser              = $this->canAccess('dashboard.index');
        $view                    = theme()->getOption('page', 'view');
        $page                    = $this->page;
        $page['title']           = trans('Permission List');
        $info                    = auth()->user()->info;

        return $dataTable->render(AppViews::USERS_INDEX, compact('page', 'info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
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
     *
     * @return \Illuminate\Http\Response
     */
    public function show(AuthUser $user)
    {
        $activeUser           = $this->canAccess('dashboard.index');
        $view                 = theme()->getOption('page', 'view');
        $page                 = $this->page;
        $info                 = auth()->user()->info;
        $page['title']        = trans('View User Details');
        $page['breadcrumb'][] = ['title' => 'View User Details', 'path' => ''];
        if (view()->exists(AppViews::USER_VIEW)) {
            return view(AppViews::USER_VIEW, compact('page', 'info', 'user'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(AuthUser $user)
    {
        $activeUser           = $this->canAccess('dashboard.index');
        $view                 = theme()->getOption('page', 'view');
        $page                 = $this->page;
        $info                 = auth()->user()->info;

        if (view()->exists(AppViews::USERS_EDIT)) {
            return view(AppViews::USERS_EDIT, compact('page', 'info', 'user'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     *
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
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
