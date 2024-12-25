<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VendorController;

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
    return view('index');
});
Route::post('/message', [ContactController::class, 'store'])->name('message.store');
Route::get('/vendor', [VendorController::class, 'index'])->name('vendor.index');
Route::get('/client', [VendorController::class, 'index'])->name('client.index');
