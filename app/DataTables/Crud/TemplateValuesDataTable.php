<?php
namespace App\DataTables\Crud;

use App\Models\Crud\TemplateValues;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class TemplateValuesDataTable extends DataTable
{
    public function dataTable($query)
    {
        return datatables()
        ->eloquent($query)
        ->addIndexColumn()
        ->editColumn('code', function ($model) {
            return '[:' . $model->code . ']';
        })
        ->addColumn('actions', function ($model) {
            return view('settings.crud.template-values._actions', compact('model'));
        })
        ->rawColumns(['actions']);
    }

    public function query(TemplateValues $model)
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
            Column::make('value')->title('Value'),
            Column::make('actions')->title('Actions')
                ->orderable(false)
                ->searchable(false)
        ];

        return $columns;
    }

    protected function filename()
    {
        return 'TemplateValues_' . date('YmdHis');
    }
}
