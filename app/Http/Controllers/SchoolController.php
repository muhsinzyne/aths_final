<?php
namespace App\Http\Controllers;

use App\Constants\AppViews;
use App\DataTables\SchoolsDataTable;
use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SchoolsDataTable $dataTable)
    {
        $activeUser              = $this->canAccess('dashboard.index');
        $view                    = theme()->getOption('page', 'view');
        $page                    = $this->page;
        $page['title']           = trans('School List');
        $info                    = auth()->user()->info;

        return $dataTable->render(AppViews::SCHOOL_INDEX, compact('page', 'info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show(School $school)
    {
        $activeUser              = $this->canAccess('dashboard.index');
        $view                    = theme()->getOption('page', 'view');
        $page                    = $this->page;
        $info                    = auth()->user()->info;
        $page['title']           = trans('School Details');
        $page['breadcrumb'][]    = ['title' => 'School Details', 'path' => ''];
        if (view()->exists(AppViews::SCHOOL_VIEW)) {
            return view(AppViews::SCHOOL_VIEW, compact('page', 'info', 'school'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        $activeUser              = $this->canAccess('dashboard.index');
        $view                    = theme()->getOption('page', 'view');
        $page                    = $this->page;
        $info                    = auth()->user()->info;
        $page['title']           = trans('School Details');
        $page['breadcrumb'][]    = ['title' => 'School Details', 'path' => ''];
        if (view()->exists(AppViews::SCHOOL_VIEW)) {
            return view(AppViews::SCHOOL_VIEW, compact('page', 'info', 'school'));
        }
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
    public function destroy(School $school)
    {
        $activeUser    = $this->canAccess('dashboard.index');
        $deleted       = false;
        $deleted       = $school->delete();
        if ($deleted) {
            notify()->success('School - has been deleted');
        }
        if ($deleted == false) {
            notify()->error('Your are not autherized to deleted this permission');
        }

        return redirect()->route('schools.index');
    }
}
