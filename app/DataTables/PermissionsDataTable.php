<?php
namespace App\DataTables;

use App\Models\Crud\Permission;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PermissionsDataTable extends DataTable
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
            ->rawColumns(['name', 'properties', 'action'])
            ->editColumn('id', function (Permission $model) {
                return $model->id;
            })
                        ->editColumn('created_at', function (Permission $model) {
                            //return $model->created_at->format('d M, Y H:i:s');
                        });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Permission $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Permission $model)
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
            ->setTableId('permissions-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->stateSave(true)
            ->orderBy(6)
            ->responsive()
            ->autoWidth(false)
            ->parameters([
                'scrollX'      => true,
                'drawCallback' => 'function() { KTMenu.createInstances(); }',
            ])
            // ->buttons(
            //     //Button::make('create'),
            //     //Button::make('export'),
            //     //Button::make('print'),
            //     //Button::make('reset'),
            //     //Button::make('reload')
            // )
            ->parameters([
                'buttons' => ['csv', 'pdf'],
            ])
            ->addTableClass('align-middle table-row-dashed fs-6 gy-5');

        // return $this->builder()
        //             ->setTableId('permissions-table')
        //             ->columns($this->getColumns())
        //             ->minifiedAjax()
        //             ->dom('Bfrtip')
        //             ->orderBy(1)
        //             ->buttons(
        //                 Button::make('create'),
        //                 //Button::make('export'),
        //                 //Button::make('print'),
        //                //Button::make('reset'),
        //                 //Button::make('reload')
        //             );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id')->title('Id'),
            Column::make('name')->title(__('Name')),
            //Column::make('description'),
            //Column::make('subject_type'),
            //Column::make('subject_id')->title(__('Subject')),
            //Column::make('causer_id')->title(__('Causer')),
            Column::make('created_at'),
            //Column::computed('action')
            //->exportable(false)
            //->printable(false)
            //->addClass('text-center')
            // ->responsivePriority(-1),
            //Column::make('properties')->addClass('none'),
        ];
        // return [
        //     Column::computed('action')
        //           ->exportable(false)
        //           ->printable(false)
        //           ->width(60)
        //           ->addClass('text-center'),
        //     Column::make('id'),
        //     Column::make('add your columns'),
        //     Column::make('created_at'),
        //     Column::make('updated_at'),
        // ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Permissions_' . date('YmdHis');
    }
}
