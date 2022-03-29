<?php
namespace App\DataTables\Students;

use App\Models\Students;
use App\Models\StudentsList;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class StudentsListDataTable extends DataTable
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
            ->editColumn('Student_Name', function ($student) {
                return view('students.list._name_photo', compact('student'));
            })

            ->addColumn('actions', function ($model) {
                return view('students.list._actions', compact('model'));
            })

            ->editColumn('Status', function ($model) {
                return view('students.list._status', compact('model'));
            })
            ->rawColumns(['actions', 'Student_Name', 'photo']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\StudentsList $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Students $model)
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
            Column::make('Student_ID')->title('S ID'),

            Column::make('Student_Name')->title('Student Name'),
            Column::make('School_ID')->title('School'),
            Column::make('Homeroom')->title('Homeroom'),
            Column::make('Status')->title('Status'),
            //Column::make('Student_Name_AR')->title('Student Arabic'),
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
        return 'StudentsList_' . date('YmdHis');
    }
}
