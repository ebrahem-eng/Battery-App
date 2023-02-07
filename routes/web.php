<?php

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
Route::get('/admin', function () {
    return view('Admin/index');
})->middleware(['auth', 'verified', 'role:Admin'])->name('admin.index');
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
