<?php

use App\Http\Controllers\MyScheludeController;
use App\Http\Controllers\ProfileController;

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




Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {  return view('dashboard');      })->name('dashboard');
    Route::get('/my-schelude', [MyScheludeController::class, 'index'])->name('my-schelude');
    Route::get('/my-schelude/create', [MyScheludeController::class, 'create'])->name('my-schelude.create');
    Route::post('/my-schelude', [MyScheludeController::class, 'store'])->name('my-schelude.store');
    Route::delete('/my-schelude/{scheduler}', [MyScheludeController::class, 'destroy'])->name('my-schedule.destroy');




    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
