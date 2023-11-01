<?php

use App\Http\Controllers\BarangController;
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
    return view('dashboard');
})->name('dashboard');

Route::controller(BarangController::class)->prefix('barang')->group(function () {
    Route::get('', 'index')->name('barang');
    Route::get('create', 'create')->name('barang.create');
    Route::get('edit/{id}', 'edit')->name('barang.edit');

    Route::post('store', 'store')->name('barang.store');
    Route::post('update/{id}', 'update')->name('barang.update');

    Route::get('delete/{id}', 'delete')->name('barang.delete');
    Route::post('detail/{id}', 'detail')->name('barang.detail');
});
