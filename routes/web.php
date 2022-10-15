<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPageController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\PostController;


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
    // return view('welcome');
    return redirect()->route('login');
});


Route::get('/test', function () {
    return view('layouts.common');
});

Route::get('/dashboard', [MyPageController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('dashboard');


// ユーザのプロフィール管理用
Route::resource('user_profile', UserProfileController::class);

// ユーザの投稿管理用
Route::resource('post', PostController::class);


require __DIR__.'/auth.php';
