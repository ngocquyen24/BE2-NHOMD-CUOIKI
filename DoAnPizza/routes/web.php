<?php
namespace Illuminate\Session\Middleware;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\ProductController;
use \App\Http\Controllers\Admin\Users\LoginController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/users/login',[LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/store',[LoginController::class, 'store']);



// Route::get('admin/main',[MainController::class,'index'])->name('admin')->middleware('auth');


Route::middleware(['auth'])->group(function () {
    Route::get('admin',[MainController::class,'index'])->name('admin');
    Route::get('admin/main',[MainController::class,'index']);
});

#Product
Route::prefix('products')->group(function () {
    Route::get('add', [ProductController::class, 'create']);
    Route::post('add', [ProductController::class, 'store']);
    Route::get('list', [ProductController::class, 'index']);
    Route::get('edit/{product}', [ProductController::class, 'show']);
    Route::post('edit/{product}', [ProductController::class, 'update']);
    Route::DELETE('destroy', [ProductController::class, 'destroy']);
});


#Upload
Route::post('upload/services', [UploadController::class, 'store']);