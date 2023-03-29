<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Administrators\AdministratorController;
use App\Http\Controllers\Admin\Complaints\ComplaintsController;
use App\Http\Controllers\Admin\Loads\LoadsController;
use App\Http\Controllers\Admin\Systems\SystemController;
use App\Http\Controllers\Admin\User_Information\User_InformationController;
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

    //<========== user_information route section ============>
    Route::get('/userinformation/show', [User_InformationController::class, 'index'])->name('admin.show.user.information')->middleware(['permission:استعراض معلومات الزبائن']);
    Route::delete('/userinformation/destroy/{user_Information}', [User_InformationController::class, 'destroy'])->name('admin.softdelete.user.information')->middleware(['permission:حذف معلومات الزبائن']);
    Route::get('/userinformation/Archive', [User_InformationController::class, 'Archive'])->name('admin.archive.user.information')->middleware(['permission:ارشيف معلومات الزبائن']);
    Route::get('/userinformation/restore/{id}', [User_InformationController::class, 'restore'])->name('admin.restore.user.information')->middleware(['permission:استعادة معلومات زبون']);
    Route::delete('/userinformation/force/delete/{id}', [User_InformationController::class, 'force_delete'])->name('admin.forcedelete.user.information')->middleware(['permission:حذف معلومات زبون بشكل نهائي']);


    //<========== complaints route section ============>
    Route::get('/complaints/show', [ComplaintsController::class, 'index'])->name('admin.show.complaints');
    Route::delete('/complaints/delete/{complaints}', [ComplaintsController::class, 'destroy'])->name('admin.destroy.complaints');
});
//<================== end admin section ============>

//<=================== user section ================>

//Route::get('/', function () {return view('welcome');})->name('user.index');
Route::get('/', [UserController::class, 'Show_load_watt'])->name('show.load');
Route::get('/notfound', function () {
    return view('pages-error-404');
})->name('notfound');
Route::get('/user/calculate/watt/sum', [UserController::class, 'Calculate_Sum_Watting'])->name('calculate.watt');
// Route::get('/user/calculate/watt/time', [UserController::class, 'Calculate_watt_time'])->name('calculate.watt.time');
Route::get('/user/calculate/watt/time/warning', [UserController::class, 'Calculate_watt_time_warning'])->name('calculate.watt.time.warning');
Route::get('/user/calculate/watt/time/continu', [UserController::class, 'Calculate_watt_time_continu'])->name('calculate.watt.time.continu');
Route::get('/user/calculate/watt/time/edit', [UserController::class, 'Calculate_watt_time_edit'])->name('calculate.watt.time.edit');
Route::get('/user/calculate/watt/time/edit/time', [UserController::class, 'Calculate_watt_time_edit_time'])->name('calculate.watt.time.edit.time');
Route::get('/user/update/loads', [UserController::class, 'update_loads'])->name('update.loads');
Route::get('/user/update/time', [UserController::class, 'update_time'])->name('update.time');
Route::get('/user/show/possibilities', [UserController::class, 'show_page_possibilities'])->name('show.page.possibilities');
Route::get('/user/show/TableSystem', [UserController::class, 'show_page_table_system'])->name('show.page.table.system');
Route::get('/user/possibilities', [UserController::class, 'show_possibilities'])->name('show.possibilities');
Route::get('/user/details/create', [UserController::class, 'show_user_details'])->name('show.user.details');
Route::post('/user/details/store', [UserController::class, 'store_user_details'])->name('store.user.details');

Route::get('/user/contact_us', [UserController::class, 'Show_contact_us'])->name('user.contactus');
Route::post('/user/contact_us/store', [UserController::class, 'Store_contact_us'])->name('store.contactus');


Route::get('/user/details/system', [UserController::class, 'show_page_details_system'])->name('show.page.details.system');
Route::get('/user/details/system/one/one', [UserController::class, 'one_possibilities_one_choice'])->name('one.possibilities.one.choice');
Route::get('/user/details/system/one/two', [UserController::class, 'one_possibilities_two_choice'])->name('one.possibilities.two.choice');

Route::get('/user/details/system/two/one', [UserController::class, 'two_possibilities_one_choice'])->name('two.possibilities.one.choice');
Route::get('/user/details/system/two/two', [UserController::class, 'two_possibilities_two_choice'])->name('two.possibilities.two.choice');
Route::get('/user/details/system/two/three', [UserController::class, 'two_possibilities_three_choice'])->name('two.possibilities.three.choice');
Route::get('/user/details/system/two/four', [UserController::class, 'two_possibilities_four_choice'])->name('two.possibilities.four.choice');

Route::get('/user/details/system/three/one', [UserController::class, 'three_possibilities_one_choice'])->name('three.possibilities.one.choice');
Route::get('/user/details/system/three/two', [UserController::class, 'three_possibilities_two_choice'])->name('three.possibilities.two.choice');
Route::get('/user/details/system/three/three', [UserController::class, 'three_possibilities_three_choice'])->name('three.possibilities.three.choice');
Route::get('/user/details/system/three/four', [UserController::class, 'three_possibilities_four_choice'])->name('three.possibilities.four.choice');


Route::get('/user/details/system/four/one', [UserController::class, 'four_possibilities_one_choice'])->name('four.possibilities.one.choice');
Route::get('/user/details/system/four/two', [UserController::class, 'four_possibilities_two_choice'])->name('four.possibilities.two.choice');
Route::get('/user/details/system/four/three', [UserController::class, 'four_possibilities_three_choice'])->name('four.possibilities.three.choice');

Route::get('/user/details/system/five/one', [UserController::class, 'five_possibilities_one_choice'])->name('five.possibilities.one.choice');
Route::get('/user/details/system/five/two', [UserController::class, 'five_possibilities_two_choice'])->name('five.possibilities.two.choice');

Route::get('/user/details/system/six/two', [UserController::class, 'six_possibilities_two_choice'])->name('six.possibilities.two.choice');
Route::get('/user/details/system/six/three', [UserController::class, 'six_possibilities_three_choice'])->name('six.possibilities.three.choice');
//<================== end user section ===============>


Route::middleware(['auth', 'permission:تعديل الملف الشخصي'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update/{user}', [AdminController::class, 'admin_profile_update'])->name('admin.profile.update');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
