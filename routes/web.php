<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Administrators\AdministratorController;
use App\Http\Controllers\Admin\Loads\LoadsController;
use App\Http\Controllers\Admin\Systems\SystemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
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

//<================== admin section ===============>
//<================= loads route section ===========>
Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/loads/show', [LoadsController::class, 'index'])->name('admin.show.loads')->middleware(['permission:استعراض الاحمال']);
    Route::get('/loads/create', [LoadsController::class, 'create'])->name('admin.create.loads')->middleware(['permission:اضافة حمل']);
    Route::post('/loads/store', [LoadsController::class, 'store'])->name('admin.store.loads')->middleware(['permission:اضافة حمل']);
    Route::get('/loads/archive', [LoadsController::class, 'archive'])->name('admin.archive.loads')->middleware(['permission:ارشيف الاحمال']);
    Route::delete('/loads/soft/delete/{loads}', [LoadsController::class, 'destroy'])->name('admin.softdelete.loads')->middleware(['permission:حذف حمل']);
    Route::delete('/loads/force/delete/{id}', [LoadsController::class, 'force_delete'])->name('admin.forcedelete.loads')->middleware(['permission:حذف حمل بشكل نهائي']);
    Route::get('/loads/restore/{id}', [LoadsController::class, 'restore'])->name('admin.restore.loads')->middleware(['permission:استعادة حمل']);
    Route::get('/loads/edit/{loads}', [LoadsController::class, 'edit'])->name('admin.edit.loads')->middleware(['permission:تعديل حمل']);
    Route::put('/loads/update/{loads}', [LoadsController::class, 'update'])->name('admin.update.loads')->middleware(['permission:تعديل حمل']);

    //<=========== systems route section ====================>
    Route::get('/systems/show', [SystemController::class, 'index'])->name('admin.show.systems')->middleware(['permission:استعراض المنظومات']);
    Route::get('/systems/create', [SystemController::class, 'create'])->name('admin.create.systems')->middleware(['permission:اضافة منظومة']);
    Route::post('/systems/store', [SystemController::class, 'store'])->name('admin.store.systems')->middleware(['permission:اضافة منظومة']);
    Route::get('/systems/edit/{systems}', [SystemController::class, 'edit'])->name('admin.edit.systems')->middleware(['permission:تعديل منظومة']);
    Route::put('/systems/update/{systems}', [SystemController::class, 'update'])->name('admin.update.systems')->middleware(['permission:تعديل منظومة']);
    Route::delete('/systems/soft/delete/{systems}', [SystemController::class, 'destroy'])->name('admin.softdelete.systems')->middleware(['permission:حذف منظومة']);
    Route::get('/systems/archive', [SystemController::class, 'archive'])->name('admin.archive.systems')->middleware(['permission:ارشيف المنظومات']);
    Route::get('/systems/restore/{id}', [SystemController::class, 'restore'])->name('admin.restore.systems')->middleware(['permission:استعادة منظومة']);
    Route::delete('/systems/force/delete/{id}', [SystemController::class, 'force_delete'])->name('admin.forcedelete.systems')->middleware(['permission:حذف منظومة بشكل نهائي']);

    //<========== administrators route section ============>

    Route::get('/administrators/show', [AdministratorController::class, 'index'])->name('admin.show.administrators')->middleware(['permission:استعراض المسؤولين']);
    Route::get('/administrators/create', [AdministratorController::class, 'create'])->name('admin.create.administrators')->middleware(['permission:اضافة مسؤول']);
    Route::post('/administrators/store', [AdministratorController::class, 'store'])->name('admin.store.administrators')->middleware(['permission:اضافة مسؤول']);
    Route::get('/administrators/edit/{administrators}', [AdministratorController::class, 'edit'])->name('admin.edit.administrators')->middleware(['permission:تعديل مسؤول']);
    Route::put('/administrators/update/{administrators}', [AdministratorController::class, 'update'])->name('admin.update.administrators')->middleware(['permission:تعديل مسؤول']);
    Route::delete('/administrators/soft/delete/{administrators}', [AdministratorController::class, 'destroy'])->name('admin.softdelete.administrators')->middleware(['permission:حذف مسؤول']);
    Route::get('/administrators/archive', [AdministratorController::class, 'archive'])->name('admin.archive.administrators')->middleware(['permission:ارشيف المسؤولين']);
    Route::get('/administrators/restore/{id}', [AdministratorController::class, 'restore'])->name('admin.restore.administrators')->middleware(['permission:استعادة مسؤول']);
    Route::delete('/administrators/force/delete/{id}', [AdministratorController::class, 'force_delete'])->name('admin.forcedelete.administrators')->middleware(['permission:حذف مسؤول بشكل نهائي']);
    Route::get('/administrators/show/permission', [AdministratorController::class, 'show_permission'])->name('admin.showpermission.administrators')->middleware(['permission:استعراض الصلاحيات']);
    Route::get('/administrators/resetpassword', [AdministratorController::class, 'show_reset_password'])->name('admin.show.resetpassword.administrators')->middleware(['permission:اعادة تعين كلمة المرور']);
    Route::get('/administrators/edit/password/{administrators}', [AdministratorController::class, 'edit_password'])->name('admin.edit.password.administrators')->middleware(['permission:اعادة تعين كلمة المرور']);
    Route::put('/administrators/update/password/{administrators}', [AdministratorController::class, 'update_password'])->name('admin.update.password.administrators')->middleware(['permission:اعادة تعين كلمة المرور']);
    Route::get('/administrators/show/permission/administrators/{administrators}', [AdministratorController::class, 'show_administrators_permissions'])->name('admin.show.permissionsadministrators.administrators')->middleware(['permission:استعراض صلاحيات مسؤول']);
    Route::post('/administrators/{administrators}/permissions', [AdministratorController::class, 'givepermission'])->name('admin.permissions.giv.administrators')->middleware(['permission:اعطاء صلاحية']);
    Route::delete('/administrators/{administrators}/permissions/{permission}', [AdministratorController::class, 'revokepermission'])->name('admin.permissions.revoke.administrators')->middleware(['permission:سحب صلاحية']);
});
//<================== end admin section ============>

//<=================== user section ================>

//Route::get('/', function () {return view('welcome');})->name('user.index');
Route::get('/', [UserController::class, 'Show_load_watt'])->name('show.load');
Route::get('/notfound', function () {
    return view('pages-error-404');
})->name('notfound');
Route::get('/user/calculate/watt/sum', [UserController::class, 'Calculate_Sum_Watting'])->name('calculate.watt');
Route::get('/user/calculate/watt/time', [UserController::class, 'Calculate_watt_time'])->name('calculate.watt.time');
Route::get('/user/calculate/watt/time/warning', [UserController::class , 'Calculate_watt_time_warning'])->name('calculate.watt.time.warning');
Route::get('/user/calculate/watt/time/continu', [UserController::class , 'Calculate_watt_time_continu'])->name('calculate.watt.time.continu');
Route::get('/user/calculate/watt/time/edit', [UserController::class , 'Calculate_watt_time_edit'])->name('calculate.watt.time.edit');
Route::get('/user/calculate/watt/time/edit/time', [UserController::class , 'Calculate_watt_time_edit_time'])->name('calculate.watt.time.edit.time');
Route::get('/user/update/loads', [UserController::class , 'update_loads'])->name('update.loads');
Route::get('/user/update/time', [UserController::class , 'update_time'])->name('update.time');
Route::get('/user/show/possibilities', [UserController::class, 'show_page_possibilities'])->name('show.page.possibilities');
Route::get('/user/show/TableSystem', [UserController::class, 'show_page_table_system'])->name('show.page.table.system');
Route::get('/user/possibilities', [UserController::class, 'show_possibilities'])->name('show.possibilities');
Route::get('/user/one/TableSystem', [UserController::class, 'one_table_system'])->name('one_table.system');
Route::get('/user/two/TableSystem', [UserController::class, 'two_table_system'])->name('two_table.system');
Route::get('/user/three/TableSystem', [UserController::class, 'three_table_system'])->name('three_table.system');
Route::get('/user/fourth/TableSystem', [UserController::class, 'fourth_table_system'])->name('fourth_table.system');
Route::get('/user/five/TableSystem', [UserController::class, 'five_table_system'])->name('five_table.system');
Route::get('/user/six/TableSystem', [UserController::class, 'six_table_system'])->name('six_table.system');
//<================== end user section ===============>


Route::middleware(['auth', 'permission:تعديل الملف الشخصي'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
