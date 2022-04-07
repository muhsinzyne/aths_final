<?php
namespace App\DataTables\Crud;

use App\Models\Crud\PushNotificationTemplates;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PushNotificationTemplateDataTable extends DataTable
{
    public function dataTable($query)
    {
        return datatables()
        ->eloquent($query)
        ->addIndexColumn()
        ->addColumn('actions', function ($model) {
            return view('settings.crud.template-values._actions', compact('model'));
        })
        ->rawColumns(['actions']);
    }

    public function query(PushNotificationTemplates $model)
    {
        return $model->newQuery();
    }

    public function html()
    {
        return $this->builder()
            ->setTableId('students-list')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->stateSave(true)
            //->orderBy('id', 'desc')
            ->responsive()
            ->autoWidth(false)
            ->parameters([
                'scrollX'      => true,
                'drawCallback' => 'function() { KTMenu.createInstances(); }',
            ])
            ->parameters([
                'buttons' => ['csv', 'pdf'],
            ])
            ->addTableClass('align-middle table-row-dashed fs-6 gy-5');
    }

    protected function getColumns()
    {
        $columns = [
            Column::make('DT_RowIndex')
                ->title('#')
                ->orderable(false)
                ->searchable(false),

            Column::make('code')->title('Code'),
            Column::make('template')->title('Template'),
            Column::make('description')->title('Description'),
            Column::make('template_id')->title('Template ID'),
            Column::make('actions')->title('Actions')
                ->orderable(false)
                ->searchable(false)
        ];

        return $columns;
    }

    protected function filename()
    {
        return 'PushNotification_Template_' . date('YmdHis');
    }
}
