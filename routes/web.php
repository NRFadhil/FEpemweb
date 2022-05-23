<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/exit', function () {
    return view('exit');
});

Route::redirect('/','login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('admin/validate',[App\Http\Controllers\AdminController::class, 
    'showValidateForm'])->name('validateform.admin');

Route::post('admin/validate',[App\Http\Controllers\AdminController::class,
    'validateForm'])->name('validate.admin');

// Route::get('admin/validate',[App\Http\Controllers\AdminController::class, 
//     'showValidateForm'])->middleware(['auth'])>name('validateform.admin');


// Route::post('admin/validate',[App\Http\Controllers\AdminController::class, 
//     'validateForm'])->middleware(['auth'])>name('validate.admin');