<?php

use App\Http\Controllers\AboutmeController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExperiencesController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/aboutme', [AboutmeController::class, 'index'])->name('aboutme');

Route::get('/archive', [ArchiveController::class, 'index'])->name('archive.index');;
Route::get('/archive/web', [ArchiveController::class, 'web'])->name('archive.web');
Route::get('/archive/photo', [ArchiveController::class, 'photo'])->name('archive.photo');
Route::get('/archive/design', [ArchiveController::class, 'design'])->name('archive.design');


route::resource('experiences', ExperiencesController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
