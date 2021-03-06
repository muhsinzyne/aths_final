<?php
namespace App\Http\Controllers\Base;

use App\Constants\AppConst;
use App\Constants\UserTypes;
use App\Models\AuthUser;
use App\Models\Crud\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use Exception;
use App\Models\User;

class BaseHttpController extends BaseController
{
    public function __get(string $name)
    {
        if ($name == 'page') {
            $page                      = [];
            $page['logo']              = asset('dist/images/logo.svg');
            $page['organization']      =  AppConst::ORGANIZATION;
            $page['app']               = AppConst::APP;
            $page['app_name']          = AppConst::APP_NAME;
            $page['title']             = '';
            $page['description']       = '';
            $page['breadcrumb']        = [];
            $page['uri']               = request()->getUri();
            $page['layout']            = 'side-menu';
            $page['activeUser']        = null;
            if (Auth::check()) {
                $page['activeUser'] = Auth::user();
            }
            $page['js']               = [];
            $page['css']              = [];

            $page['breadcrumb'][] = [
                'title'  => 'Home',
                'path'   => '/',
                'active' => false,
            ];

            $page['myroles'] = $this->getAllowdedRoleList();

            return $page;
        }
    }

    private function getAllowdedRoleList()
    {
        if (Auth::check()) {
            if (Auth::user()->type == UserTypes::SU_ADMIN) {
                return Role::all()->pluck('name', 'id')->toArray();
            } else {
                return Auth::user()->roles->pluck('name', 'id')->toArray();
            }
        } else {
            return [];
        }
    }

    public function accesControl(String $permission = '', array $role = [])
    {
        $user = $this->_hasPermission($permission, $role);
        if ($user == null) {
            throw new Exception('Error Processing Request. Permission Denied', 1);
        }

        return $user;
    }

    protected function _hasPermission(String $permission = '', array $role = [])
    {
        $user = $this->_identifyUser();
        if ($permission) {
            return $user->hasPermissionTo($permission) ? $user : null;
        }
        $roles = $user->getRoleNames();
        if (in_array($role, $roles)) {
            return $user;
        }
    }

    public function hasPermissonFor($permission = '', $user = null)
    {
        if ($user == null) {
            $user = $this->_identifyUser();
        }
        if (in_array($permission, $user->getAllPermissionNames())) {
            return true;
        }

        return false;
    }

    protected function _identifyUser()
    {
        $this->activeUser = User::findOrFail(Auth::user()->id);

        return $this->activeUser;
    }

    protected function identiyUser()
    {
        $this->activeUser = User::findOrFail(Auth::user()->id);

        return $this->activeUser;
    }

    public function canAccess($accessOrigin = 'dashboard.index', $onlywith = [])
    {
        $user = AuthUser::findOrFail(Auth::user()->id);
        if ($accessOrigin == 'dashboard.index') {
            return $user;
        }
        if ($user->type != 'super_admin') {
            if (count($onlywith) > 0) {
                if (!in_array($user->type, $onlywith)) {
                    abort(403);
                }
            }
            if (!$user->can($accessOrigin)) {
                abort(403);
            }
        }
    }
}
