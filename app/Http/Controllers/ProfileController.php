<?php
namespace App\Http\Controllers;

use App\Constants\AppUrls;
use App\Constants\AppViews;
use App\Http\Requests\Account\SettingsEmailRequest;
use App\Http\Requests\Account\SettingsPasswordRequest;
use App\Models\AuthUser;
use Hash;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user                 = $this->canAccess('dashboard.index');
        $view                 = theme()->getOption('page', 'view');
        $page                 = $this->page;
        $info                 = auth()->user()->info;
        $page['title']        = trans('My Profile');
        $page['breadcrumb'][] = ['title' => 'My Profile', 'path' => ''];

        if (view()->exists(AppViews::PROFILE_INDEX)) {
            return view(AppViews::PROFILE_INDEX, compact('page', 'info', 'user'));
        }
    }

    public function update(Request $request)
    {
        $this->validate(
            $request,
            [
                'first_name'        => 'required',
                'last_name'         => 'required',
                'phone'             => 'required|max:100',
            ]
        );

        $userData                  = AuthUser::findOrFail(auth()->user()->id);
        $userData->first_name      = $request->input('first_name');
        $userData->last_name       = $request->input('last_name');
        $userData->info->phone     = $request->input('phone');
        $userData->info->country   = $request->input('country');
        $userData->info->language  = $request->input('language');
        $userData->info->language  = $request->input('language');

        if ($userData->info->update() && $userData->update()) {
            notify()->success('Your Profile Informations has been updated successfully.');

            return redirect(route('settings.profile'));
        } else {
            echo '<pre>';
            print_r('else error');
            echo '</pre>';
            die();
        }
    }

    /**
    * Edit Profile
    *
    *
    */
    public function edit()
    {
        $user                 = $this->canAccess('dashboard.index');
        $view                 = theme()->getOption('page', 'view');
        $page                 = $this->page;
        $info                 = auth()->user()->info;
        $page['title']        = trans('Edit Profile ');
        $page['breadcrumb'][] = ['title' => 'Edit Profile ', 'path' => ''];
        if (view()->exists(AppViews::PROFILE_EDIT)) {
            return view(AppViews::PROFILE_EDIT, compact('page', 'info', 'user'));
        }
    }

    public function changeEmail(SettingsEmailRequest $request)
    {
        $activeUser           = $this->canAccess('dashboard.index');
        $user                 = auth()->user();
        $user->update(['email' => $request->input('email')]);

        if ($request->expectsJson()) {
            return response()->json($request->all());
        }

        return redirect()->intended(AppUrls::SETTINGS_PROFILE_INDEX);
    }

    public function changePassword(SettingsPasswordRequest $request)
    {
        $user                 = $this->canAccess('dashboard.index');
        $user                 = auth()->user();
        $user->update(['password' => Hash::make($request->input('password'))]);
        if ($request->expectsJson()) {
            return response()->json($request->all());
        }

        return redirect()->intended(AppUrls::SETTINGS_PROFILE_INDEX);
    }
}
