<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::namespace('App\Http\Controllers\Account')->middleware(['auth'])->group(function () {
    Route::namespace('Task')->prefix('tasks')->group(function () {
        Route::get('/', IndexController::class)->name('account.task.index');
        Route::post('/', StoreController::class)->name('account.task.store');
        Route::get('/{task}', ShowController::class)->name('account.task.show');
        Route::get('/{task}/edit', EditController::class)->name('account.task.edit');
        Route::patch('/{task}', UpdateController::class)->name('account.task.update');
        Route::delete('/{task}', DeleteController::class)->name('account.task.delete');
    });
});

Auth::routes();
