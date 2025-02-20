<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommentaireController;
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
    
    // Route::get('/dashboard', [CategorieController::class, 'getAllCategories'])->name('dashboard.categorie');
    Route::get('/dashboard', [PosteController::class, 'getMyPostes'])->middleware(['auth', 'verified'])->name('dashboard');
    
    Route::post('/dashboard/create', [PosteController::class, 'create'])->name('dashboard.create');
    Route::get('/postes/edit/{poste}', [PosteController::class, 'edit'])->name('poste.edit');
    Route::put('/postes/edit/{poste}/editPoste', [PosteController::class, 'editPoste'])->name('poste.editPoste');
    Route::post('/postes/delete/{poste}/deletePoste', [PosteController::class, 'deletePoste'])->name('poste.deletePoste');
    
    Route::post('/dashboard/createComment', [CommentaireController::class, 'createComment'])->name('dashboard.createComment');
    Route::get('/post/{id}/comments', [CommentaireController::class, 'getCommentsByPost'])->name('comments.get');
    Route::get('/postes/{poste_id}/comments', [CommentaireController::class, 'getCommentsByPost'])->name('post.comments');


});

require __DIR__.'/auth.php';
