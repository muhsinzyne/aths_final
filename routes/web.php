<?php

use App\Http\Controllers\Account\SettingsController;
use App\Http\Controllers\Auth\SocialiteLoginController;
use App\Http\Controllers\Crud\PushNotificationTemplateController;
use App\Http\Controllers\Crud\TemplateValuesController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\Documentation\ReferencesController;
use App\Http\Controllers\Logs\AuditLogsController;
use App\Http\Controllers\Logs\SystemLogsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Scrap\StudentExamAuditController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SchoolController;
use App\Models\Crud\PushNotificationTemplates;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return redirect('index');
// });

$menu = theme()->getMenu();

// array_walk($menu, function ($val) {
//     if (isset($val['path'])) {
//         if ($val['path'] == '') {
//             $route = Route::get($val['path'], [PagesController::class, 'index']);
//         } else {
//         }
//         $route = Route::get($val['path'], [PagesController::class, 'index']);

//         // Exclude documentation from auth middleware
//         if (!Str::contains($val['path'], 'documentation')) {
//             $route->middleware('auth');
//         }
//     }
// });

// Route::get(
//     '/',
//     function () {
//         return redirect('/index');
//     }
// )->name('site.home');

// Route::get('/', [PagesController::class, 'index'])->name('home');

Route::fallback(function () {
    return view('errors.404');
});

Route::middleware('auth')->group(function () {
    Route::get('/', [DashBoardController::class, 'index'])->name('home');

    Route::resource('students', StudentsController::class)->names('students');

    Route::resource('schools', SchoolController::class)->names('schools');

    // to remove after project set
    Route::prefix('account')->group(function () {
        Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');
        Route::put('settings', [SettingsController::class, 'update'])->name('settings.update');
        Route::put('settings/email', [SettingsController::class, 'changeEmail'])->name('settings.changeEmail');
        Route::put('settings/password', [SettingsController::class, 'changePassword'])->name('settings.changePassword');
    });

    // Logs pages
    Route::prefix('log')->name('log.')->group(function () {
        Route::resource('system', SystemLogsController::class)->only(['index', 'destroy']);
        Route::resource('audit', AuditLogsController::class)->only(['index', 'destroy']);
    });

    Route::prefix('settings')->group(function () {
        Route::resource('permission', PermissionController::class)->names('settings.permission');
        Route::resource('roles', RoleController::class)->names('settings.roles');
        Route::delete('roles/{role_id}/remove_user/{user_id}', [RoleController::class, 'removeUserFromRole'])->name('settings.roles.remove_user_from_role');
        Route::resource('users', UsersController::class)->names('settings.users');
        Route::get('profile', [ProfileController::class, 'index'])->name('settings.profile');
        Route::put('profile', [ProfileController::class, 'update'])->name('settings.profile');
        Route::get('profile/edit', [ProfileController::class, 'edit'])->name('settings.profile.edit');
        Route::put('profile/change_password', [ProfileController::class, 'changePassword'])->name('settings.profile.change_password');
        Route::put('profile/change_email', [ProfileController::class, 'changeEmail'])->name('settings.profile.change_email');
        Route::resource('crud/template-values', TemplateValuesController::class)->names('settings.crud.template-values');
        Route::resource('crud/push-notification', PushNotificationTemplateController::class)->names('settings.crud.push-notification');
    });

    Route::get('demo', [DemoController::class, 'index'])->name('demo.index');

    Route::get('scrap/student-exam', [StudentExamAuditController::class, 'index'])->name('scrap.student-exam');
});

// Route::resource('users', UsersController::class);

/**
 * Socialite login using Google service
 * https://laravel.com/docs/8.x/socialite
 */
Route::get('/auth/redirect/{provider}', [SocialiteLoginController::class, 'redirect']);

require __DIR__ . '/auth.php';
