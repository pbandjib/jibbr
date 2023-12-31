<?php

use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'index'])->name('post.index');

Route::middleware('auth')->group(function () {
    Route::post('/post', [PostController::class,'store'])->name('post.store');
    Route::get('/post/create', [PostController::class, 'create'])->name('post.create');

    Route::middleware('checkOwner:post')->group(function () {
        Route::get('/post/{post}/edit', [PostController::class, 'edit'])
            ->name('post.edit');

        Route::put('/post/{post}', [PostController::class, 'update'])
            ->name('post.update');

        Route::delete('/post/{post}', [PostController::class, 'destroy'])
            ->name('post.destroy');

        Route::get('/post/{post}/delete', [PostController::class, 'delete'])
            ->name('post.delete');
    });
});

Route::get('/post/{id}', [PostController::class,'show'])->name('post.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
