<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;

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

// Route::get('/', function () {
//     return view('content');
// })->name('content');

Route::get('/app', function () {
    return view('layouts.app');
});

Route::get('/{id}', [StoreController::class,'index'])->name('content');
Route::get('/', [StoreController::class,'show']);