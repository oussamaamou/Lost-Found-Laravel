<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PosteController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/dashboard/create', [PosteController::class, 'create'])->name('dashboard.create');
    Route::post('/dashboard/edit', [PosteController::class, 'edit'])->name('dashboard.edit');
    Route::get('/dashboard/delete', [PosteController::class, 'delete'])->name('dashboard.delete');
    Route::get('/dashboard', [PosteController::class, 'getMyPostes'])->name('dashboard');
    // Route::get('/dashboard', [CategorieController::class, 'getAllCategories'])->name('dashboard.categories');

});

require __DIR__.'/auth.php';
