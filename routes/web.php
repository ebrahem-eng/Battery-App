<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Loads\LoadsController;
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
Route::middleware(['auth', 'verified', 'role:Admin'])->prefix('admin')->group(function () {
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

});
//<================== end admin section ============>

//<=================== user section ================>

//Route::get('/', function () {return view('welcome');})->name('user.index');
Route::get('/', [UserController::class, 'Show_load_watt'])->name('show.load');
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
