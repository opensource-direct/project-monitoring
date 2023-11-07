<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeAdministratorController;
use App\Http\Controllers\ReminderController;
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

Route::get('/', function() {
    return view('welcome');
})->name('welcome');

Route::prefix('administrator')->middleware(['auth', 'auth.administrator'])->group(function () {
    //ini route khusus untuk operator
    Route::get('home', [HomeAdministratorController::class, 'index'])->name('administrator.index');

    Route::resource('reminder', ReminderController::class);
    Route::get('close/{id}', [ReminderController::class, 'close'])->name('reminder.close');
    Route::get('open/{id}', [ReminderController::class, 'open'])->name('reminder.open');
    Route::get('delete/{id}', [ReminderController::class, 'delete'])->name('reminder.delete');
});

// Route::controller(DashboardController::class)->prefix('/')->group(function () {
//     Route::get('/', 'index')->name('dashboard');
// });

Route::controller(BarangController::class)->prefix('barang')->group(function () {
    Route::get('', 'index')->name('barang');
    Route::get('create', 'create')->name('barang.create');
    Route::get('edit/{id}', 'edit')->name('barang.edit');

    Route::post('store', 'store')->name('barang.store');
    Route::post('update/{id}', 'update')->name('barang.update');

    Route::get('delete/{id}', 'delete')->name('barang.delete');
    Route::post('detail/{id}', 'detail')->name('barang.detail');
});

// Route::controller(ReminderController::class)->prefix('reminder')->group(function () {
//     Route::get('', 'index')->name('reminder');
//     Route::get('create', 'create')->name('reminder.create');
//     Route::get('edit/{id}', 'edit')->name('reminder.edit');

//     Route::post('store', 'store')->name('reminder.store');
//     Route::post('update/{id}', 'update')->name('reminder.update');

//     Route::get('delete/{id}', 'delete')->name('reminder.delete');
//     Route::get('close/{id}', 'close')->name('reminder.close');
//     Route::get('open/{id}', 'open')->name('reminder.open');
//     Route::post('detail/{id}', 'detail')->name('reminder.detail');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('logout', function () {
    Auth::logout();
    return view('welcome');
})->name('logout');
 