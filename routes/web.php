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

Route::get('/', function () {
    return redirect('user/login');
});

Route::get('/dashboard_tambah', function () { 
    return view('dashboard_tambah'); 
   });

   Route::get('/dashboard_edit', function () { 
    return view('dashboard_edit'); 
   });

   Route::get('/dashboard_edit_pengguna', function () { 
    return view('dashboard_edit_pengguna'); 
   });

   Route::get('/voting', function () { 
    return view('voting'); 
   });

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['user'])->name('dashboard');

//Route::get('/exit', function () {
//    return view('exit');
//})->middleware(['user'])->name('exit');

require __DIR__.'/user.php';require __DIR__.'/admin.php';
