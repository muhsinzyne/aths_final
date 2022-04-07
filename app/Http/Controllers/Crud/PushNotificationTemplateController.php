<?php
namespace App\Http\Controllers\Crud;

use App\Constants\AppConst;
use App\Constants\AppViews;
use App\DataTables\Crud\PushNotificationTemplateDataTable;
use App\Http\Controllers\Controller;
use App\Models\Crud\PushNotificationTemplates;
use App\Models\Crud\TemplateValues;
use Illuminate\Http\Request;

class PushNotificationTemplateController extends Controller
{
    const MODULE_NAME = ' Push Notification Template ';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PushNotificationTemplateDataTable $dataTable)
    {
        $activeUser              = $this->canAccess('dashboard.index');
        $view                    = theme()->getOption('page', 'view');
        $page                    = $this->page;
        $page['title']           = trans(self::MODULE_NAME);
        $info                    = auth()->user()->info;

        return $dataTable->render(AppViews::PUSHNOTIFICATION_TEMPLATE_INDEX, compact('page', 'info'));
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

        $templateValues = TemplateValues::all();

        if (view()->exists(AppViews::PUSHNOTIFICATION_TEMPLATE_CREATE)) {
            return view(AppViews::PUSHNOTIFICATION_TEMPLATE_CREATE, compact('page', 'info', 'templateValues'));
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
                'code'          => 'required|max:500|unique:' . AppConst::DB_PREFIX . 'push_notification_templates,code,',
                'template'      => 'required',
            ]
        );
        $createItem = [
            'code'        => $request->input('code'),
            'template'    => $request->input('template'),
            'description' => $request->input('description'),
            'template_id' => $request->input('template_id'),
        ];

        $templateValue = PushNotificationTemplates::create($createItem);
        if ($templateValue) {
            notify()->success(self::MODULE_NAME . ' -  has been Created');
        }
        $returnBack = $request->input('save_and_add') ?? false;

        return  $returnBack ? redirect()->route(AppViews::PUSHNOTIFICATION_TEMPLATE_CREATE) : redirect()->route(AppViews::PUSHNOTIFICATION_TEMPLATE_INDEX);
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
