<?php
namespace App\Http\Controllers\Crud;

use App\Constants\AppConst;
use App\Constants\AppViews;
use App\DataTables\Crud\TemplateValuesDataTable;
use App\Http\Controllers\Controller;
use App\Models\TemplateValues;
use Illuminate\Http\Request;

class TemplateValuesController extends Controller
{
    const MODULE_NAME = ' Template Values ';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(TemplateValuesDataTable $dataTable)
    {
        $activeUser              = $this->canAccess('dashboard.index');
        $view                    = theme()->getOption('page', 'view');
        $page                    = $this->page;
        $page['title']           = trans('Template Values');
        $info                    = auth()->user()->info;

        return $dataTable->render(AppViews::TEMPLATE_VALUES_INDEX, compact('page', 'info'));
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
        $page['title'] = trans('Create' . self::MODULE_NAME);

        if (view()->exists(AppViews::TEMPLATE_VALUES_CREATE)) {
            return view(AppViews::TEMPLATE_VALUES_CREATE, compact('page', 'info'));
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
        $activeUser              = $this->canAccess('dashboard.index');
        $this->validate(
            $request,
            [
                'code'       => 'required|max:500|unique:' . AppConst::DB_PREFIX . 'template_values,code,',
                'value'      => 'required',
            ]
        );
        $createItem = [
            'code'  => $request->input('code'),
            'value' => $request->input('value'),
        ];

        $templateValue = TemplateValues::create($createItem);
        if ($templateValue) {
            notify()->success(self::MODULE_NAME . ' -  has been Created');
        }
        $returnBack = $request->input('save_and_add') ?? false;

        return  $returnBack ? redirect()->route(AppViews::TEMPLATE_VALUES_CREATE) : redirect()->route(AppViews::TEMPLATE_VALUES_INDEX);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TemplateValues $templateValue)
    {
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TemplateValues $templateValue)
    {
        $activeUser    = $this->canAccess('dashboard.index');
        $view          = theme()->getOption('page', 'view');
        $page          = $this->page;
        $info          = auth()->user()->info;
        $page['title'] = trans('Edit ' . self::MODULE_NAME);

        if (view()->exists(AppViews::TEMPLATE_VALUES_EDIT)) {
            return view(AppViews::TEMPLATE_VALUES_EDIT, compact('page', 'info', 'templateValue'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TemplateValues $templateValue)
    {
        $activeUser    = $this->canAccess('dashboard.index');

        $this->validate(
            $request,
            [
                'code'       => 'required|max:100|unique:' . AppConst::DB_PREFIX . 'template_values,code,' . $templateValue['id'] . ',id',
                'value'      => 'required',
            ]
        );

        $templateValue->code        = $request->input('code');
        $templateValue->value       = $request->input('value');
        $returnBack                 = $request->input('save_and_add') ?? false;

        if ($templateValue->update()) {
            notify()->success(self::MODULE_NAME . $templateValue->value . ' has been updated');
        }

        return  $returnBack ? redirect()->route(AppViews::TEMPLATE_VALUES_EDIT, $templateValue->id) : redirect()->route(AppViews::TEMPLATE_VALUES_INDEX);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TemplateValues $templateValue)
    {
        $activeUser    = $this->canAccess('dashboard.index');
        $deleted       = false;
        $deleted       = $templateValue->delete();
        if ($deleted) {
            notify()->success(self::MODULE_NAME . ' - has been deleted');
        }

        if ($deleted == false) {
            notify()->error('Your are not autherized to deleted this permission');
        }

        return redirect()->route(AppViews::TEMPLATE_VALUES_INDEX);
    }
}
