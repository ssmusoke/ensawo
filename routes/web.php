<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\LinkTransactionToUser;
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

Route::view("/", 'welcome')->name('welcome');
Route::view('contact-us', 'contact-us')->name('contact-us');
Route::post('contact-us-action', ContactUsController::class)->name('contact-us-action');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::view("dashboard", 'dashboard')->name('dashboard');
    Route::get("link-transaction-to-user/{uuid}", LinkTransactionToUser::class)->name("link-transaction-to-user");
});