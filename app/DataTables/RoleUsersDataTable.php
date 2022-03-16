<?php
namespace App\DataTables;

use App\Models\RoleUser;
use App\Models\User;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class RoleUsersDataTable extends DataTable
{
    public $roleId = 0;

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
            ->editColumn('created_at', function (User $model) {
                return $model->created_at->format('d M Y,  H:i A');
            })
            ->addColumn('user', function ($model) {
                return view('settings.roles._user_profile_block', compact('model'));
            })
            ->editColumn('type', function (User $model) {
                return ucwords(str_replace('_', ' ', $model->type));
            })
            ->addColumn('actions', function ($model) {
                return view('settings.roles._action_users', compact('model'));
            })
            ->rawColumns(['actions', 'user']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\RoleUser $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        return $model->newQuery()
            ->join('aths_model_has_roles', 'aths_model_has_roles.model_id', '=', 'aths_users.id')
            ->where('aths_model_has_roles.model_type', User::class)
            ->where('aths_model_has_roles.role_id', $this->roleId);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('users-table')
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
                ->searchable(false)
                ->width(50)
                ->setRowAttr([
                    'color' => 'abcc',
                ]),
            Column::make('user')->title('User')
                ->orderable(false)
                ->searchable(false),

            Column::make('type'),
            Column::make('created_at')->title('Joined Date'),
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
        return 'RoleUsers_' . date('YmdHis');
    }
}
