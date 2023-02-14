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
 Route::get('/',[AdminController::class , 'index'])->name('admin.index');
 Route::get('/loads/show',[LoadsController::class ,'index'])->name('admin.show.loads');
 Route::get('/loads/create',[LoadsController::class ,'create'])->name('admin.create.loads');
 Route::post('/loads/store',[LoadsController::class ,'store'])->name('admin.store.loads');
 Route::get('/loads/archive',[LoadsController::class , 'archive'])->name('admin.archive.loads');
 Route::delete('/loads/soft/delete/{loads}',[LoadsController::class ,'destroy'])->name('admin.softdelete.loads');
 Route::delete('/loads/force/delete/{id}',[LoadsController::class ,'force_delete'])->name('admin.forcedelete.loads');
 Route::get('/loads/restore/{id}',[LoadsController::class ,'restore'])->name('admin.restore.loads');
 Route::get('/loads/edit/{loads}',[LoadsController::class , 'edit'])->name('admin.edit.loads');
 Route::put('/loads/update/{loads}',[LoadsController::class , 'update'])->name('admin.update.loads');

 //<=========== systems route section ====================>
 Route::get('/systems/show',[SystemController::class , 'index'])->name('admin.show.systems');
 Route::get('/systems/create',[SystemController::class , 'create'])->name('admin.create.systems');
 Route::post('/systems/store',[SystemController::class ,'store'])->name('admin.store.systems');
 Route::get('/systems/edit/{systems}',[SystemController::class , 'edit'])->name('admin.edit.systems');
 Route::put('/systems/update/{systems}',[SystemController::class , 'update'])->name('admin.update.systems');
 Route::delete('/systems/soft/delete/{systems}',[SystemController::class , 'destroy'])->name('admin.softdelete.systems');
 Route::get('/systems/archive',[SystemController::class , 'archive'])->name('admin.archive.systems');
 Route::get('/systems/restore/{id}',[SystemController::class ,'restore'])->name('admin.restore.systems');
 Route::delete('/systems/force/delete/{id}',[SystemController::class ,'force_delete'])->name('admin.forcedelete.systems');

 //<========== administrators route section ============>

 Route::get('/administrators/show',[AdministratorController::class , 'index'])->name('admin.show.administrators');
 Route::get('/administrators/create',[AdministratorController::class , 'create'])->name('admin.create.administrators');
 Route::post('/administrators/store',[AdministratorController::class ,'store'])->name('admin.store.administrators');
 Route::get('/administrators/edit/{administrators}',[AdministratorController::class , 'edit'])->name('admin.edit.administrators');
 Route::put('/administrators/update/{administrators}',[AdministratorController::class , 'update'])->name('admin.update.administrators');
 Route::delete('/administrators/soft/delete/{administrators}',[AdministratorController::class , 'destroy'])->name('admin.softdelete.administrators');
 Route::get('/administrators/archive',[AdministratorController::class , 'archive'])->name('admin.archive.administrators');
 Route::get('/administrators/restore/{id}',[AdministratorController::class ,'restore'])->name('admin.restore.administrators');
 Route::delete('/administrators/force/delete/{id}',[AdministratorController::class ,'force_delete'])->name('admin.forcedelete.administrators');
 Route::get('/administrators/show/permission',[AdministratorController::class , 'show_permission'])->name('admin.showpermission.administrators');
Route::get('/administrators/resetpassword',[AdministratorController::class , 'show_reset_password'])->name('admin.show.resetpassword.administrators');
Route::get('/administrators/edit/password/{administrators}',[AdministratorController::class , 'edit_password'])->name('admin.edit.password.administrators');
Route::put('/administrators/update/password/{administrators}',[AdministratorController::class , 'update_password'])->name('admin.update.password.administrators');
});
//<================== end admin section ============>

//<=================== user section ================>

//Route::get('/', function () {return view('welcome');})->name('user.index');
Route::get('/', [UserController::class, 'Show_load_watt'])->name('show.load');
Route::get('/notfound',function(){ return view('pages-error-404');})->name('notfound');
Route::get('/user/calculate/watt/sum', [UserController::class, 'Calculate_Sum_Watting'])->name('calculate.watt');
Route::get('/user/calculate/watt/time', [UserController::class, 'Calculate_watt_time'])->name('calculate.watt.time');
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


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
