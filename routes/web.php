<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;

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
    return view('welcome');
});

Route::resource('posts',PostController::class)->middleware('auth');

//ソーシャルログイン
Route::prefix('login/{provider}')->where(['provider'=>'(line|github)'])->group(function(){
    Route::get('/','App\Http\Controllers\Auth\LoginController@redirectToProvider')->name('social_login.redirect');
    Route::get('callback','App\Http\Controllers\Auth\LoginController@handleProviderCallBack')->name('social_login.callback');
});


// Route::prefix('login')->name('login.')->group(function() {
//     Route::get('/line/redirect', [LoginController::class, 'redirectToProvider'])->name('line.redirect');
//     Route::get('/line/callback', [LoginController::class, 'handleProviderCallback'])->name('line.callback');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
