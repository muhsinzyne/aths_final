<?php
namespace App\Http\Controllers;

use App\DataTables\Logs\AuditLogsDataTable;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index(AuditLogsDataTable $dataTable)
    {
        $page          = $this->page;
        $page['title'] = 'Demo';

        return $dataTable->render('demo.index');
    }
}
