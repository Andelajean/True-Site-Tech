<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Page.index');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/about',[PageController::class,'about'])->name('about');
Route::get('/contact',[PageController::class,'contact'])->name('contact');
Route::get('/service',[PageController::class,'service'])->name('service');
Route::get('/stage',[PageController::class,'stage'])->name('stage');
Route::get('/formation',[PageController::class,'formation'])->name('formation');
Route::get('/actu',[PageController::class,'actualite'])->name('actu');
Route::get('/prod/admin/dashboard',[AdminController::class,'dashboard'])->name('dashboard-admin');
Route::delete('/contact/{id}', [AdminController::class, 'destroy'])->name('contact.destroy');
Route::post('/contact/reply', [AdminController::class, 'replycontact'])->name('contact.reply');
// Routes pour les stages
//Route::get('/dashboard/stages', [AdminController::class, 'index'])->name('stages.index');
Route::post('/stages/reply', [AdminController::class, 'replystage'])->name('stages.reply');
Route::delete('/stages/{id}', [AdminController::class, 'destroystage'])->name('stages.destroy');
Route::post('/contact/traitement',[DemandeController::class,'contact'])->name('user.contact');
Route::post('/stage/traitement',[DemandeController::class,'stage'])->name('user.stage');
Route::post('/formation/traitement',[DemandeController::class,'formation'])->name('user.formation');
// Routes pour les formations
//Route::get('/dashboard/formations', [AdminController::class, 'index'])->name('formations.index');
Route::post('/formations/reply', [AdminController::class, 'replyformation'])->name('formations.reply');
Route::delete('/formations/{id}', [AdminController::class, 'destroyformation'])->name('formations.destroy');
Route::get('/actualites/{id}/edit', [AdminController::class, 'editactu'])->name('actualites.edit');
Route::put('/actualites/{id}', [AdminController::class, 'updateactu'])->name('actualites.update');
Route::delete('/actualites/{id}', [AdminController::class, 'destroyactu'])->name('actualites.destroy');
Route::post('/actualites', [AdminController::class, 'actualite'])->name('actualites.store');
Route::get('/actualite/{id}', [PageController::class, 'detail'])->name('actualite.detail');



require __DIR__.'/auth.php';
