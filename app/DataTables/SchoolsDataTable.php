<?php
namespace App\DataTables;

use App\Models\School;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class SchoolsDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
        ->eloquent($query)
        ->addIndexColumn()
        ->editColumn('EnglishName', function ($model) {
            return view('schools._names', compact('model'));
        })
        ->editColumn('Gender', function ($model) {
            return view('schools._gender', compact('model'));
        })
        ->editColumn('IsRegEnabled', function ($model) {
            return view('schools._reg_enabled', compact('model'));
        })
        ->addColumn('actions', function ($model) {
            return view('schools._actions', compact('model'));
        })
        ->rawColumns(['actions']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\School $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(School $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
        ->setTableId('school-list')
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

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        $columns = [
            Column::make('DT_RowIndex')
                ->title('#')
                ->orderable(false)
                ->searchable(false),
            Column::make('SchoolId')->title('School Code'),
            Column::make('EnglishName')->title('Name'),
            Column::make('Gender')->title('Gender'),
            Column::make('Campus')->title('Compus'),
            Column::make('Entity')->title('Entity'),
            Column::make('IsRegEnabled')->title('Reg Enabled'),
            Column::make('actions')->title('Actions')
                ->orderable(false)
                ->searchable(false)
        ];

        return $columns;
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Schools_' . date('YmdHis');
    }
}
