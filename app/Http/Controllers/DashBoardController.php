<?php
namespace App\Http\Controllers;

use App\Constants\AppViews;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function index()
    {
        $activeUser    = $this->canAccess('dashboard.index');
        $view          = theme()->getOption('page', 'view');
        $page          = $this->page;
        $page['title'] = trans('Dashbaord');

        if (view()->exists(AppViews::DASHBOARD)) {
            return view(AppViews::DASHBOARD, compact('page'));
        }

        return redirect('/');
    }
}
