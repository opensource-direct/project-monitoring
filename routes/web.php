<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeAdministratorController;
use App\Http\Controllers\ReminderController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', function() {
    return view('welcome');
})->name('welcome');

Route::prefix('administrator')->middleware(['auth', 'auth.administrator'])->group(function () {
    //ini route khusus untuk operator
    Route::get('dashboard', [HomeAdministratorController::class, 'index'])->name('administrator.index');

    Route::resource('reminder', ReminderController::class);
    Route::get('close/{id}', [ReminderController::class, 'close'])->name('reminder.close');
    Route::get('open/{id}', [ReminderController::class, 'open'])->name('reminder.open');
    Route::get('delete/{id}', [ReminderController::class, 'delete'])->name('reminder.delete');
    Route::post('update/{id}', [ReminderController::class, 'update'])->name('reminder.update');

    Route::resource('users', UsersController::class);
});

Route::get('logout', function () {
    Auth::logout();
    return view('welcome');
})->name('logout');
 