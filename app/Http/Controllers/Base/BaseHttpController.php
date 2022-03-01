<?php
namespace App\Http\Controllers\Base;

use App\Constants\AppConst;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;

class BaseHttpController extends BaseController
{
    public function __get(string $name)
    {
        if ($name == 'page') {
            $page                     = [];
            $page['logo']             = asset('dist/images/logo.svg');
            $page['organization']     =  AppConst::ORGANIZATION;
            $page['app']              = AppConst::APP;
            $page['app_name']         = AppConst::APP_NAME;
            $page['title']            = '';
            $page['description']      = '';
            $page['brudcrums']        = [];
            $page['uri']              = request()->getUri();
            $page['layout']           = 'side-menu';
            $page['activeUser']       = null;
            if (Auth::check()) {
                $page['activeUser'] = Auth::user();
            }
            $page['js']               = [];
            $page['css']              = [];

            return $page;
        }
    }
}
