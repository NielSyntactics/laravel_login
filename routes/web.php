<?php

use App\Mail\NewUserNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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
    return view('welcome');
});

// Route::resource('/register',App\Http\Controllers\Auth\RegisterController::class);

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'store'])->name('register.store');
Route::post('/logout',[App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'authenticate'])->name('login.authenticate');

Route::group(['middleware' => 'auth'], function() {

    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::group(['middleware' => 'CheckRole', 'prefix' => 'admin'], function() {
        Route::resource('/notes',App\Http\Controllers\NoteController::class);
        Route::resource('/college', App\Http\Controllers\CollegeController::class);
        Route::resource('/user', App\Http\Controllers\UserController::class);
        Route::put('/user/{user}/editbasic',[App\Http\Controllers\UserController::class, 'updateBasicInformation'])->name('user.updateBasicInformation');
        Route::put('/user/{user}/editemail',[App\Http\Controllers\UserController::class, 'updateEmail'])->name('user.updateEmail');
        Route::put('/user/{user}/editpassword',[App\Http\Controllers\UserController::class, 'updatePassword'])->name('user.updatePassword');
        Route::put('/user/{user}/editimage',[App\Http\Controllers\UserController::class, 'updateImage'])->name('user.updateImage');
        Route::get('/file',[App\Http\Controllers\FileController::class, 'index'])->name('file.index');
        Route::post('/file',[App\Http\Controllers\FileController::class, 'store'])->name('file.store');
        Route::get('/file/{id}',[App\Http\Controllers\FileController::class, 'show'])->name('file.show');
        Route::delete('/file/{id}',[App\Http\Controllers\FileController::class, 'destroy'])->name('file.delete');
    });


    Route::get('/mail',[App\Http\Controllers\FeedbackController::class, 'index'])->name('mail.index');
    Route::post('/mail',[App\Http\Controllers\FeedbackController::class, 'send'])->name('mail.send');

    Route::get('/signage',[App\Http\Controllers\SignaturePadController::class, 'index'])->name('signature.index');
    Route::post('/signage',[App\Http\Controllers\SignaturePadController::class, 'store'])->name('signature.store');

});
