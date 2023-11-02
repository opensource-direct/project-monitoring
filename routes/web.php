<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReminderController;
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

Route::controller(DashboardController::class)->prefix('/')->group(function () {
    Route::get('/', 'index')->name('dashboard');
});

Route::controller(BarangController::class)->prefix('barang')->group(function () {
    Route::get('', 'index')->name('barang');
    Route::get('create', 'create')->name('barang.create');
    Route::get('edit/{id}', 'edit')->name('barang.edit');

    Route::post('store', 'store')->name('barang.store');
    Route::post('update/{id}', 'update')->name('barang.update');

    Route::get('delete/{id}', 'delete')->name('barang.delete');
    Route::post('detail/{id}', 'detail')->name('barang.detail');
});

Route::controller(ReminderController::class)->prefix('reminder')->group(function () {
    Route::get('', 'index')->name('reminder');
    Route::get('create', 'create')->name('reminder.create');
    Route::get('edit/{id}', 'edit')->name('reminder.edit');

    Route::post('store', 'store')->name('reminder.store');
    Route::post('update/{id}', 'update')->name('reminder.update');

    Route::get('delete/{id}', 'delete')->name('reminder.delete');
    Route::get('close/{id}', 'close')->name('reminder.close');
    Route::get('open/{id}', 'open')->name('reminder.open');
    Route::post('detail/{id}', 'detail')->name('reminder.detail');
});